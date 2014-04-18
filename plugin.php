<?php
// Copyright 2014 Tristan van Bokkem

if (!defined("IN_ESOTALK")) exit;

ET::$pluginInfo["Share"] = array(
	"name" => "Share",
	"description" => "Share conversations with Facebook, Twitter and Google+.",
	"version" => "1.0.0",
	"author" => "Tristan van Bokkem",
	"authorEmail" => "tristanvanbokkem@gmail.com",
	"authorURL" => "http://www.bitcoinclub.nl",
	"license" => "GPLv2"
);

class ETPlugin_Share extends ETPlugin {


	public function handler_conversationController_renderBefore($sender) {
		$sender->addCSSFile($this->getResource("share.css"));
		$sender->addJSFile($this->getResource("share.js"));
		$sender->addJSLanguage("Share");
	}

	public function handler_conversationController_renderScrubberBefore($sender, $data) {
		if(!ET::$session->user) return;
		$controls = "<ul id='shareControls'>
						<li><a href='https://www.facebook.com/sharer/sharer.php?u=".URL(conversationURL($data["conversation"]["conversationId"], $data["conversation"]["title"]), true)."' target='_blank'><i class='icon-facebook'></i><span>".T("Share on")." Facebook</span></a></li>
						<li><a href='https://twitter.com/share?text=".$data["conversation"]["title"]."&url=".URL(conversationURL($data["conversation"]["conversationId"], $data["conversation"]["title"]), true)."' target='_blank'><i class='icon-twitter'></i><span>".T("Share on")." Twitter</span></a></li>
						<li><a href='https://plus.google.com/share?url=".URL(conversationURL($data["conversation"]["conversationId"], $data["conversation"]["title"]), true)."' target='_blank'><i class='icon-google-plus'></i><span>".T("Share on")." Google</span></a></li>
					</ul>";

		echo $controls;
	}

}
