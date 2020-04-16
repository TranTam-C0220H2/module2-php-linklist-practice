<?php


class LinkList
{
    protected $firstNode;
    protected $lastNode;
    protected $countNode;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->countNode = 0;
    }

    public function insertFirstNode($data)
    {
        $newNode = new Node($data);

        $newNode->next = $this->firstNode;
        $this->firstNode = $newNode;
        if ($this->lastNode = null) {
            $this->firstNode = $newNode;
        }
        $this->countNode++;
    }

    public function insertLastNode($data)
    {
        $newNode = new Node($data);
        if ($this->lastNode != null) {
            $this->lastNode->next = $newNode;
            $newNode->next = null;
            $this->lastNode = $newNode;
            $this->countNode++;
        } else {
            $this->insertFirstNode($data);
        }
    }

    public function totalNodes()
    {
        return $this->countNode;
    }

    public function readList()
    {
        $arrayList = [];;
        $currentNode = $this->firstNode;
        while ($currentNode != null) {
            array_push($arrayList, $currentNode->readNode());
            $currentNode = $currentNode->next;
        }
        return $arrayList;
    }
}