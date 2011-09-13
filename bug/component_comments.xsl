<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output indent="yes"  encoding="UTF-8"/>
    <xsl:strip-space elements="*"/>

    <xsl:template match="node()|@*">
        <xsl:copy>
            <xsl:apply-templates select="node()|@*"/>
        </xsl:copy>
    </xsl:template>

    <xsl:template match="html">
	<div class="comments">
	 <xsl:apply-templates select="//*[@class='component']"/>
	</div>
    </xsl:template>

    <xsl:template match="div[@class='component']">
	<xsl:element name="div">
	  <xsl:attribute name="class"><xsl:value-of select="translate(translate(*[position()=1],' ','_'),&quot;&#10;&quot;,'_')" /> comment</xsl:attribute>
	  <xsl:apply-templates select="*[position()>1]"/>
	</xsl:element>
    </xsl:template>

    <xsl:template match="//*[contains(@class,'faq') or contains(@class,'submit')]"/>

    <xsl:template match="*[@class='subcomponents']"/>

</xsl:stylesheet>
