<?php

namespace Bundle\SearchBundle\Lucene;

use Bundle\SearchBundle\SearchBundle\Field;
use Zend\Search\Lucene\Document as ZendDocument;

/**
 * Description of Document
 *
 * @author iampersistent
 */
class Document extends ZendDocument {

    /**
     * Returns type for a named field in this document.
     *
     * @param string $fieldName
     * @return string
     */
    public function getFieldType($fieldName)
    {
        if (!array_key_exists($fieldName, $this->_fields)) {
            throw new Exception("Field name \"$fieldName\" not found in document.");
        }
        return $this->_fields[$fieldName]->getType ();
    }
}

