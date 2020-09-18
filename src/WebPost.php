<?php
/*
 * @Name: WebPostPHP
 * @Author: Max Base
 * @Date: 2020-09-19
 * @Repository: https://github.com/BaseMax/WebPostPHP
 */
class WebPostPHP {
	private $id=0;
	private $scripts=[];
	private $load=0;
	public function __construct() {}
	private function parse($action, $params, $text) {
		$this->scripts[$this->id++]=[$action, $params, $text];
		return $this->id-1;
	}
	private function toArray($params) {
		$vals=[];
		$values=explode("&", $params);
		foreach($values as $i=>$value) {
			preg_match('/([^\=]+)=(.*?)$/i', $value, $match);
			$vals[]=[$match[1], $match[2]];
		}
		return $vals;
	}
	public function add($action, $params=null, $text=null) {
		if($text == null) {
			$text=$params;
			$params=null;
		}
		if($params == null) {
			// $splits=explode("?", $action);
			preg_match('/([^\?]+)\?(.*?)$/i', $action, $match);
			$id=$this->parse($match[1], $this->toArray($match[2]), $text);
		}
		else if(is_array($params)) {
			$vals=[];
			foreach($params as $key=>$value) {
				$vals[]=[$key, $value];
			}
			$id=$this->parse($action, $vals, $text);
		}
		else {
			$values=$this->toArray($params);
			$id=$this->parse($action, $values, $text);
		}
		return $this->html($id);
	}
	private function html($id) {
		$action=$this->scripts[$id][0];
		$values=$this->scripts[$id][1];
		$text=$this->scripts[$id][2];
		$id++;
		print "<form action=\"$action\" id=\"web-post-php-$id\">\n";
		foreach($values as $i=>$value) {
			print "<input type=\"hidden\" name=\"$value[0]\" value=\"$value[1]\">\n";
		}
		print "<button style=\"background:transparent;border:0px;\">$text</button>\n";
		print "</form>\n";
	}
}
