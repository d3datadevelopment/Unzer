<?php

/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 * http://www.shopmodule.com
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author        D3 Data Development - Daniel Seifert <support@shopmodule.com>
 * @link          http://www.oxidmodule.com
 */

namespace D3\Heidelpay\publicDir;

use D3\Heidelpay\Models\Factory;
use D3\Heidelpay\Models\Webhooks\ResponseHandler;
use D3\Heidelpay\Models\Webhooks\UnauthorizedCallException;
use D3\Heidelpay\Models\Webhooks\WebhookExceptionInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use UnzerSDK\Exceptions\UnzerApiException;

// @codeCoverageIgnoreStart

$bootstrapFileName = getenv('ESHOP_BOOTSTRAP_PATH');
if (!empty($bootstrapFileName)) {
    $bootstrapFileName = realpath(trim(getenv('ESHOP_BOOTSTRAP_PATH')));
} else {
    $count = 0;
    $bootstrapFileName = '../../../source/bootstrap.php';
    $currentDirectory = __DIR__ . '/';
    while ($count < 5) {
        $count++;
        if (file_exists($currentDirectory . $bootstrapFileName)) {
            $bootstrapFileName = $currentDirectory . $bootstrapFileName;
            break;
        }
        $bootstrapFileName = '../' . $bootstrapFileName;
    }
}

if (!(file_exists($bootstrapFileName) && !is_dir($bootstrapFileName))) {
    $items = [
        "Unable to find eShop bootstrap.php file.",
        "You can override the path by using ESHOP_BOOTSTRAP_PATH environment variable.",
        "\n"
    ];

    $message = implode(" ", $items);

    die($message);
}

function willCompiled()
{
    return in_array(true,
        array_map(
            function ($traceItem) {
                return isset($traceItem['class'])
                    && $traceItem['class'] === ContainerBuilder::class;
            },
            debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)
        )
    );
}

if (!willCompiled() && !defined('OXID_PHP_UNIT')) {
    require_once($bootstrapFileName);

    define('OX_IS_ADMIN', false);
}

if (false == function_exists('isAdmin')) {
    /**
     * @return bool
     */
    function isAdmin()
    {
        if (defined('OX_IS_ADMIN')) {
            return OX_IS_ADMIN;
        }

        return true;
    }
}

class Webhook
{
    public function __construct()
    {
        try {
            $factory     = oxNew( Factory::class );
            $unzer       = $factory->getHeidelpayInterface();
            $jsonRequest = file_get_contents( 'php://input' );
            $json = json_decode($jsonRequest);

            $log = oxNew(Factory::class)->getModuleConfiguration()->d3getLog();
            $log->info(__CLASS__, __FUNCTION__, __LINE__, 'webhook', $jsonRequest);

            if (!isset($json->publicKey) || $json->publicKey !== $factory->getModuleConfiguration()->getValue('mgwPublicKey')) {
                throw new UnauthorizedCallException();
            }

            $event = $json->event;
            $resource = $unzer->fetchResourceFromEvent( $jsonRequest );
            oxNew(ResponseHandler::class, $event, $resource);
        } catch (UnzerApiException|WebhookExceptionInterface $e) {
            $log = oxNew(Factory::class)->getModuleConfiguration()->d3getLog();
            $log->warning(__CLASS__, __FUNCTION__, __LINE__, $e->getMessage());
        }
    }
}

new Webhook();