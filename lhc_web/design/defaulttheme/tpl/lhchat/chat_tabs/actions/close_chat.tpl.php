<?php if ($chat->user_id == erLhcoreClassUser::instance()->getUserID() || erLhcoreClassUser::instance()->hasAccessTo('lhchat','allowcloseremote')) : ?>
<a class="material-icons mr-0 text-muted" onclick="lhinst.closeActiveChatDialog(<?php echo $chat->id?>,$('#tabs'),true)" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/adminchat','Close chat')?>">close</a>
<?php endif;?>