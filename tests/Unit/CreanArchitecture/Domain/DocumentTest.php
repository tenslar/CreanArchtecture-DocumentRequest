<?php

namespace Tests\Unit\CreanArchitecture\Domain;

use PHPUnit\Framework\TestCase;
use App\CreanArchitecture\Domain\Document;

class DocumentTest extends TestCase
{
    /**
     * @var Document
     */
    private Document $testInstance;
    private const DOCUMENT_ID = 1;
    private const DOCUMENT_NAME = 'document_1';
    private const DOCUMENT_JA_NAME = 'ドキュメント１';

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testGetDocumentId()
    {
        $id = $this->testInstance->getDocumentId();
        $this->assertEquals(self::DOCUMENT_ID, $id);
    }

    public function testGetDocumentName()
    {
        $doc_name = $this->testInstance->getDocumentName();
        $this->assertEquals(self::DOCUMENT_NAME, $doc_name);
    }

    public function testGetDocumentJaName()
    {
        $doc_ja_name = $this->testInstance->getDocumentJaName();
        $this->assertEquals(self::DOCUMENT_JA_NAME, $doc_ja_name);
    }

    protected function setUp(): void
    {
        $this->testInstance = new Document(
            self::DOCUMENT_ID,
            self::DOCUMENT_NAME,
            self::DOCUMENT_JA_NAME,
        );
    }
}
