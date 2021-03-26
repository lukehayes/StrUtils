<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class StrUtilsTest extends TestCase
{

    public function testCanReturnPascalCaseFromStr()
    {
        $this->assertEquals(
            "StringUtilsUnitTestString",
            LH\StrUtils::PascalCase("string utils unit test string")
        );
    }

    public function testCanReturnSnakeCaseFromStr()
    {
        $this->assertEquals(
            "string_utils_unit_test_string",
            LH\StrUtils::SnakeCase("string utils unit test string")
        );
    }

    public function testCanReturnCamelCaseFromStr()
    {
        $this->assertEquals(
            "stringUtilsUnitTestString",
            LH\StrUtils::CamelCase("string utils unit test string")
        );
    }

    public function testCanReturnLengthOfString()
    {
        $this->assertIsInt(
            LH\StrUtils::Size("Foo Bar Baz")
        );

        $this->assertSame(11, LH\StrUtils::Size("Foo Bar Baz"));
    }
}
