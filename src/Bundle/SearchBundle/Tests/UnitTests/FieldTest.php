<?php

namespace Bundle\SearchBundle\Tests\UnitTests;

use Bundle\SearchBundle\Lucene\Document;
use Bundle\SearchBundle\Lucene\Field as Field;

/**
 * Description of DocumentTest
 *
 * @author iampersistent
 */
class FieldTest extends \PHPUnit_Framework_TestCase {

    public function testGetType() {
        $binaryField = \Bundle\SearchBundle\Lucene\Field::Binary('Binary', 'value');
        $keywordField = Field::Keyword('Keyword', 'value');
        $textField = Field::Text('Text', 'value');
        $unIndexedField = Field::UnIndexed('UnIndexed', 'value');
        $unStoredField = Field::UnStored('UnStored', 'value');

       $this->assertEquals('Binary', $binaryField->getType());
       $this->assertEquals('Keyword', $keywordField->getType());
       $this->assertEquals('Text', $textField->getType());
       $this->assertEquals('UnIndexed', $unIndexedField->getType());
       $this->assertEquals('UnStored', $unStoredField->getType());
    }

}
