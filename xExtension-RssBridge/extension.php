<?php
class RssBridgeExtension extends Minz_Extension {
	public function init() {
		$this->registerHook('check_url_before_add',
			array($this, 'RssBridgeDetect'));
	}

	public function handleConfigureAction() {
		$this->registerTranslates();

		if (Minz_Request::isPost()) {
			FreshRSS_Context::$system_conf->rss_bridge_url =
				Minz_Request::param('rss_bridge_url', '');
			FreshRSS_Context::$system_conf->save();
		}
	}

	public static function RssBridgeDetect($url) {
		$bridge = FreshRSS_Context::$system_conf->rss_bridge_url .
			'?action=detect&format=Atom&url=' . rawurlencode($url);

		if(strpos(get_headers($bridge)[0], '301')) {
			return $bridge;
		}
		else {
			return $url;
		}
	}
}
