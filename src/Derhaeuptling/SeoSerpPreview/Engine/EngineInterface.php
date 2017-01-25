<?php

/**
 * seo_serp_preview extension for Contao Open Source CMS
 *
 * Copyright (C) 2016 derhaeuptling
 *
 * @author  derhaeuptling <https://derhaeuptling.com>
 * @author  Codefog <http://codefog.pl>
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license LGPL
 */

namespace Derhaeuptling\SeoSerpPreview\Engine;

interface EngineInterface
{
    /**
     * Get the JavaScript engine name
     *
     * @return string
     */
    public function getJavaScriptEngineName();

    /**
     * Get the JavaScript engine file path
     *
     * @return string
     */
    public function getJavaScriptEngineSource();

    /**
     * Get the URL path
     *
     * @param int $id
     *
     * @return string
     */
    public function getUrlPath($id);

    /**
     * Get the page title with ##title## as placeholder for dynamic title
     *
     * @param int $id
     *
     * @return string
     */
    public function getPageTitle($id);

    /**
     * Get the message that will be displayed if record is not indexed
     *
     * @return string
     */
    public function getNotIndexedMessage();
}
