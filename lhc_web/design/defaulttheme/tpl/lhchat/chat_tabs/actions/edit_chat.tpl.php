<a class="text-muted" onclick="return lhc.revealModal({'title' : '<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/adminchat','Modify chat')?>', 'iframe':true,'height':350,'mparams':{'backdrop':false},'url':WWW_DIR_JAVASCRIPT +'chat/modifychat/<?php echo $chat->id?>/(pos)/'+$('#chat-tab-li-<?php echo $chat->id?>').index()})" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/adminchat','Edit chat information')?>"><i class="material-icons mr-0">mode_edit</i></a>