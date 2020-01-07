<?php


namespace App\CreanArchitecture\Domain;


class Document
{
    private int $documentId;
    private string $documentName;
    private string $documentJaName;

    public function __construct(int $documentId, string $documentName, string $documentJaName)
    {
        $this->documentId = $documentId;
        $this->documentName = $documentName;
        $this->documentJaName = $documentJaName;
    }

    public function getDocumentId()
    {
        return $this->documentId;
    }

    public function getDocumentName()
    {
        return $this->documentName;
    }

    public function getDocumentJaName()
    {
        return $this->documentJaName;
    }
}
