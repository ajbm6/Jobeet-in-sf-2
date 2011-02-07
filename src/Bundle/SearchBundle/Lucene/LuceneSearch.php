<?php

namespace Bundle\SearchBundle\Lucene;

use Bundle\SearchBundle\Lucene\Lucene;
use Zend\Search\Lucene\Analysis\Analyzer\Analyzer;

/**
 * Description of Lucene
 *
 * @author iampersistent
 */
class LuceneSearch {

    protected $index;

    /**
     * Instanciate the Auth service
     *
     * @param UserRepositoryInterface $userRepository
     * @param Session $session
     */
    public function __construct($luceneIndexPath, $analyzer) {
        if (file_exists($luceneIndexPath)) {
            $this->index = Lucene::open($luceneIndexPath);
        } else {
            $this->index = Lucene::create($luceneIndexPath);
        }
        if(isset($analyzer)) {
            Analyzer::setDefault(new $analyzer);
        }
    }

    public function getIndex() {
        return $this->index;
    }

    /**
     *  addDocument
     *
     *   This is a convience function to add a document to the index
     *
     * @param Bundle\SearchBundle\Lucene\Document $document
     *
     */
    public function addDocument($document) {
        //TODO: look for the key, if its here, remove it first
        // see http://www.hashbangcode.com/blog/zend-lucene-and-pdf-documents-part-3-indexing-documents-438.html addDocument()

        $this->index->addDocument($document);
    }

    /**
     * updateIndex
     *
     * A convience function to commit and optimize the index
     */
    public function updateIndex() {
        $this->index->commit();
        $this->index->optimize();
    }

    public function find($query) {
        return $this->index->find($query);
    }

    public function updateDocument($document) {
        $this->addDocument($document);
    }

}
