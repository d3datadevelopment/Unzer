[{assign var="shop"           value=$oEmailView->getShop()}]
[{assign var="oViewConf"      value=$oEmailView->getViewConfig()}]
[{assign var="oConf"          value=$oViewConf->getConfig()}]
[{assign var="currency"       value=$oEmailView->getCurrency()}]
[{assign var="user"           value=$oEmailView->getUser()}]

[{oxcontent ident="d3_hp_vorkassemail_owner_subject" assign="title"}]
[{include file="email/html/header.tpl" title=$title}]
[{oxcontent ident="d3_hp_vorkassemail_owner_text"}]
[{include file="email/html/footer.tpl"}]
