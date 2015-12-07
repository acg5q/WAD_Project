<xsl:stylesheet="phones.xml" version="1.0">
<xmlns:xsl="Phones.xml">

<xsl:template match="/">
  <html>
  <body>
  <h2>Pre-Pay Phones</h2>
   
    <table border="4">
     
      <tr bgcolor="#CCE5FF">
        <th style="text-align:left">name</th>
        <th style="text-align:left">price</th>
        <th style="text-align:left">description</th>
        <th style="text-align:left">colour</th>
        <th style="text-align:left">storage</th>
        <th style="text-align:left">grade</th>
      </tr>
      <xsl:for-each select="phones/Apple">
        <tr bgcolor="#CCE5FF">
        <th style="text-align:left">name</th>
        <th style="text-align:left">price</th>
        <th style="text-align:left">description</th>
        <th style="text-align:left">colour</th>
        <th style="text-align:left">storage</th>
        <th style="text-align:left">grade</th>
      </tr>
   </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>

