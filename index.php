<?php
include 'Node.php';
include 'LinkList.php';

$linkedList = new LinkList();

$linkedList->insertFirstNode(11);
$linkedList->insertFirstNode(22);
$linkedList->insertLastNode(33);
$linkedList->insertLastNode(44);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo $totalNodes;
echo implode ('-' , $linkData);