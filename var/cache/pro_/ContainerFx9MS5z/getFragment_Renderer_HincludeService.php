<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fragment.renderer.hinclude' shared service.

$this->privates['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer(($this->services['twig'] ?? $this->load('getTwigService.php')), ($this->privates['uri_signer'] ?? ($this->privates['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('Gads8DuS5QdXK37xJBMBjWZjzVMCIx6Egjmdjf6I9pu1fKOYfcNG8U206ba38MiX'))), NULL);

$instance->setFragmentPath('/_fragment');

return $instance;