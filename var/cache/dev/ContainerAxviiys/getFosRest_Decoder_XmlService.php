<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_rest.decoder.xml' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Decoder/DecoderInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Decoder/XmlDecoder.php';

return $this->services['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder();
