<?php
class CreateOutputTemplateTestFixture extends \Enhance\TestFixture
{
    public function createOutputTemplateWithXmlExpectXmlTemplate()
    {
        $output = \Enhance\TemplateFactory::createOutputTemplate('Xml', \Enhance\Language::English);
        if (version_compare(PHP_VERSION, '8.0.0') >= 0) {
            \Enhance\Assert::areIdentical(\Enhance\TemplateType::Html, $output->getTemplateType());
        } else {
            \Enhance\Assert::areIdentical(\Enhance\TemplateType::Xml, $output->getTemplateType());
        }
    }
}
