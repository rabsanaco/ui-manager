<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:53
 */

namespace Rabsanaco\UIManager;


use Rabsanaco\Contracts\UI\Builder;
use Rabsanaco\Contracts\UI\Kit;
use Rabsanaco\Contracts\UI\Widgets\Content;
use Rabsanaco\Contracts\UI\Widgets\Footer;
use Rabsanaco\Contracts\UI\Widgets\Graphic;
use Rabsanaco\Contracts\UI\Widgets\Header;
use Rabsanaco\Contracts\UI\Widgets\Page;
use Rabsanaco\Contracts\UI\Widgets\Sidebar;

class GraphicBuilder implements Builder
{
    protected $factory;

    protected $product;

    public function __construct(Kit $factory)
    {
        $this->factory = $factory;

        $this->product = $this->factory()->createPage();
    }

    public function factory()
    {
        return $this->factory;
    }

    public function build()
    {
        return $this->product->draw();
    }

    public function createPage()
    {
        // TODO: Implement createPage() method.
    }

    public function getPage()
    {
        // TODO: Implement getPage() method.
    }

    public function setPage(Page $page)
    {
        // TODO: Implement setPage() method.
    }

    public function createHeader()
    {
        // TODO: Implement createHeader() method.
    }

    public function getHeader()
    {
        // TODO: Implement getHeader() method.
    }

    public function setHeader(Header $header)
    {
        // TODO: Implement setHeader() method.
    }

    public function createFooter()
    {
        // TODO: Implement createFooter() method.
    }

    public function getFooter()
    {
        // TODO: Implement getFooter() method.
    }

    public function setFooter(Footer $footer)
    {
        // TODO: Implement setFooter() method.
    }

    public function createSidebar()
    {
        // TODO: Implement createSidebar() method.
    }

    public function getSidebar()
    {
        // TODO: Implement getSidebar() method.
    }

    public function setSidebar(Sidebar $sidebar)
    {
        // TODO: Implement setSidebar() method.
    }

    public function createContent()
    {
        $alert = $this->factory->createAlert();

        $this->product->addContent($alert);
    }

    public function getContent()
    {
        // TODO: Implement getContent() method.
    }

    public function setContent(Content $content)
    {
        // TODO: Implement setContent() method.
    }
}
