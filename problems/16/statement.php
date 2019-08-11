<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 5.3.4.1 (Linux)"/>
	<meta name="created" content="00:00:00"/>
	<meta name="changed" content="2018-01-22T23:44:55.841024082"/>
	<style type="text/css">
		@page { margin: 0.79in }
		p { margin-bottom: 0.1in; line-height: 120% }
		h2.cjk { font-family: "Source Han Sans CN Regular" }
		h2.ctl { font-family: "Lohit Devanagari" }
		h3.cjk { font-family: "Source Han Sans CN Regular" }
		h3.ctl { font-family: "Lohit Devanagari" }
		pre.cjk { font-family: "DejaVu Sans Mono", monospace }
	</style>
</head>
<body lang="en-US" dir="ltr">

<br/>
<br/>

</h2>

<p style="font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 150%; orphans: 2; widows: 2; text-decoration: none">
<font color="#000000"><font face="Open Sans, Helvetica, Arial, Verdana, sans-serif"><font size="2" style="font-size: 11pt"><b>Given
a range L-R, find the sum of all numbers divisible by 6 in range L-R</b></font></font></font></p>
<p style="font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 150%; orphans: 2; widows: 2; text-decoration: none">
<font color="#000000"><font face="Open Sans, Helvetica, Arial, Verdana, sans-serif"><font size="2" style="font-size: 11pt"><b>L
and R are very large.</b></font></font></font></p>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 150%; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="3" style="font-size: 13pt"><b>Input</b></font></font></font></h3>
<ul>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
	<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="3" style="font-size: 13pt">The
	first line of input contains an integer <b>T, </b>the number of test
	cases</font></font></font></p>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
	<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="3" style="font-size: 13pt">The
	next <b>T</b> lines contains two space seperated integers <b>L</b>
	and <b>R</b>. </font></font></font>
	</p>
</ul>
<h3 class="western" style="margin-top: 0in; margin-bottom: 0.21in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 150%; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="3" style="font-size: 13pt"><b>Output</b></font></font></font></h3>
<p style="margin-bottom: 0.21in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">For
each test case <b>T</b>, output the the answer on a new line.</font></font></font></p>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 150%; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="3" style="font-size: 13pt"><b>Constraints</b></font></font></font></h3>
<ul>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">1
	≤&nbsp;<b>T</b>&nbsp;≤ 10<font color="#000000"><sup><font size="4" style="font-size: 14pt">5</font></sup></font></font></font></font></p>
	<li/>
<p style="margin-bottom: 0in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%; orphans: 2; widows: 2">
	<font color="#6b6b6b"><font face="Helvetica, sans-serif"><font size="2" style="font-size: 10pt">1
	≤&nbsp;<b>L&lt;R</b>≤ 10<sup><font size="4" style="font-size: 14pt">5</font></sup></font></font></font></p>
</ul>
<h3 class="western" style="margin-top: 0.16in; margin-bottom: 0.16in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 150%; orphans: 2; widows: 2">
<font color="#4a4a4a"><font face="Helvetica, sans-serif"><font size="3" style="font-size: 13pt"><b>Example</b></font></font></font></h3>
<pre class="western" style="margin-bottom: 0.21in; border: none; padding: 0in; font-variant: normal; letter-spacing: normal; font-style: normal; line-height: 150%; orphans: 2; widows: 2; background: #f5f5f5"><font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><b>Input:</b></font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">2</font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">1 20</font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">5 7</font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt"><b>Output:</b></font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">36</font></font></font>
<font color="#6b6b6b"><font face="Menlo, Monaco, Consolas, Courier New, monospace"><font size="2" style="font-size: 10pt">6</font></font></font></pre><p style="line-height: 150%">
<br/>
<br/>

</p>
<p style="line-height: 150%"><br/>
<br/>

</p>
<pre class="western" style="font-variant: normal; letter-spacing: normal; font-style: normal; font-weight: normal; line-height: 150%"><font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">Explanation for 1<sup>st</sup> : 6 + 12 + 18 = 36 </font></font></font>
<font color="#000000"><font face="Consolas, Monaco, Lucida Console, monospace"><font size="2" style="font-size: 9pt">Explanation for 2<sup>nd</sup> : 6 is the only divisible number</font></font></font></pre><p style="line-height: 150%">
<br/>
<br/>
<br/>

</p>
</body>
</html>
