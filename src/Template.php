<?php
class Template {
    protected static function Get(string $templateName, array $arguments = []): string{
		foreach($arguments as $innerName => $innerValue){
			$$innerName = $innerValue;
		}

		ob_start();
		include("../public/templates/" . $templateName . '.php');
		$contents = ob_get_contents() ?: '';
		ob_end_clean();

		return $contents;
	}
	public static function __callStatic(string $function, array $arguments): string{
		if(isset($arguments[0]) && is_array($arguments[0])){
			return self::Get($function, $arguments[0]);
		}
		else{
			return self::Get($function, $arguments);
		}
	}
}

