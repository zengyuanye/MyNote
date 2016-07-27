##PHPSTORM配置

php.ini配置

	xdebug.remote_enable = 1
	xdebug.remote_autostart=1
	xdebug.remote_port=9100
	xdebug.remote_handler = "dbgp"
	xdebug.remote_host = localhost
	zend_extension="C:\phpStudy\php55n\ext\xdebug.dll"


PHPSTORM配置

	php DBGp Proxy 中的port等于xdebug.remote_port设置的值其他为空

	PHP servers host=xdebug.remote_host
	PORT 80 DEBUGGER=XDEBUG


	Debug debugport=remote_port