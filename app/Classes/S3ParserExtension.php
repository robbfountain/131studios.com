<?php

namespace App\Classes;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Inline\Element\Image;
use League\CommonMark\Event\DocumentParsedEvent;
use League\CommonMark\Extension\ExtensionInterface;
use League\CommonMark\ConfigurableEnvironmentInterface;

class S3ParserExtension implements ExtensionInterface
{

    public function register(ConfigurableEnvironmentInterface $environment)
    {
        $environment->addEventListener(DocumentParsedEvent::class, [$this, 'onDocumentParsed']);
    }
    
    public function onDocumentParsed(DocumentParsedEvent $event)
    {
        $walker = $event->getDocument()->walker();

        while ($event = $walker->next()) {
            $node = $event->getNode();

            if (!$node instanceof Image || !$event->isEntering()) {
                continue;
            }

            ray($node->getUrl());
            if (Str::endsWith($node->getUrl(), ['.png'])) {
                $node->setUrl(Storage::disk('s3')->temporaryUrl($node->getUrl(), now()->addMinutes(10)));
            }
        }
    }
}
