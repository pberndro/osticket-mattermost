<?php

require_once INCLUDE_DIR . 'class.plugin.php';

class MattermostPluginConfig extends PluginConfig {
    function getOptions() {        
        return array(
            'mattermost' => new SectionBreakField(array(
                'label' => 'Mattermost notifier',
            )),
            'mattermost-webhook-url' => new TextboxField(array(
                'label' => 'Webhook URL',
                'configuration' => array('size'=>100, 'length'=>200),
            )),
        );
    }
}
