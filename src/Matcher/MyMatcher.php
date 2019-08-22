<?php


namespace App\Matcher;


use eZ\Publish\API\Repository\Values\Content\ContentInfo;
use eZ\Publish\API\Repository\Values\Content\Location;
use eZ\Publish\Core\MVC\Symfony\Matcher\ContentBased\MatcherInterface;
use eZ\Publish\Core\MVC\Symfony\View\LocationValueView;
use eZ\Publish\Core\MVC\Symfony\View\View;

class MyMatcher implements MatcherInterface
{
    public function matchLocation(Location $location)
    {
        return true;
    }

    public function matchContentInfo(ContentInfo $contentInfo)
    {
        return true;
    }

    public function match(View $view)
    {
        return true;
    }

    public function setMatchingConfig($matchingConfig)
    {
        // TODO: Implement setMatchingConfig() method.
    }

}
