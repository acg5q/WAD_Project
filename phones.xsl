<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<body style="font-family:Arial;font-size:12pt;background-color:#EEEEEE">
<xsl:for-each select="mobile_phone/model">
  <div style="background-color:black;color:white;padding:7px">
    <span style="font-weight:bold"><xsl:value-of select="name1"/> - </span>
    <xsl:value-of select="price"/>
    </div>
  <div style="margin-center:20px;margin-bottom:1em;font-size:22pt">
    <p>
    <xsl:value-of select="description"/>
    <span style="font-style:italic"> (<xsl:value-of select="grade"/> Grade of the overall phone)</span>
    </p>
  </div>
</xsl:for-each>
</body>
</html>