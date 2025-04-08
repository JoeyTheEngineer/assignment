<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:output method="xml" indent="yes" encoding="UTF-8"/>

  <!-- Root match -->
  <xsl:template match="/Contacts">
    <Contacts>
      <xsl:apply-templates select="contact"/>
    </Contacts>
  </xsl:template>

  <!-- Template for each contact -->
  <xsl:template match="contact">
    <contact Message="OK">
      <xsl:copy-of select="Name"/>
      <xsl:copy-of select="Email"/>
      <xsl:copy-of select="dob"/>

      <!-- Age calculation -->
      <Age>
        <xsl:call-template name="calculate-age">
          <xsl:with-param name="dob" select="string(dob)"/>
        </xsl:call-template>
      </Age>

      <xsl:copy-of select="UserMessage"/>
    </contact>
  </xsl:template>

  <!-- Template to calculate age -->
  <xsl:template name="calculate-age">
    <xsl:param name="dob"/>
    <xsl:variable name="birthYear" select="number(substring($dob, 1, 4))"/>
    <xsl:variable name="birthMonth" select="number(substring($dob, 6, 2))"/>
    <xsl:variable name="birthDay" select="number(substring($dob, 9, 2))"/>

    <!-- Static current date (today: April 8, 2025) -->
    <xsl:variable name="currentYear" select="2025"/>
    <xsl:variable name="currentMonth" select="4"/>
    <xsl:variable name="currentDay" select="8"/>

    <xsl:choose>
      <xsl:when test="($currentMonth &gt; $birthMonth) or
                      ($currentMonth = $birthMonth and $currentDay &gt;= $birthDay)">
        <xsl:value-of select="$currentYear - $birthYear"/>
      </xsl:when>
      <xsl:otherwise>
        <xsl:value-of select="$currentYear - $birthYear - 1"/>
      </xsl:otherwise>
    </xsl:choose>
  </xsl:template>

</xsl:stylesheet>
