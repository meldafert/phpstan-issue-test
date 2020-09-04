<?php
namespace test;

class B {
	public static function foo() {
		// this is legal php code (in php 7.4)
		// will be a syntax error in php 8
		return \ test\C::foo();
	}
}
