<?php
namespace Joseph\HelloWorld\Block;
class Index extends \Magento\Framework\View\Element\Template
{
    public function getDayText()
    {
	return date(DATE_RFC822) ;
    }
}
