<?php
    /**
     * XMLファイルの読み込み
     */
    $xml = new SimpleXMLElement($)
    /**
     * XSLファイルの読み込み
     */
    $xsl = new DomDocument();
    $xsl->load('test.xsl');

    /**
     * XSLTプロセッサオブジェクトの作成と使用するXSLの指定
     */
    $processor = new xsltprocessor();
    $processor->importStyleSheet($xsl);

    /**
     * 変換＆結果の表示
     */
    echo $processor->transformToXML($xml);