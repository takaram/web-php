<?
require("shared.inc");
commonHeader("Documentation ");
?>

<ul>

<li>The <a href="FAQ.php3">PHP 3.0 FAQ</a> is your first stop for general
    information and those questions that seem to be on most people's minds.

<li>Read what has <a href="changes.php3">changed since PHP/FI 2.0</a>

<li><a href="manual/">PHP Manual Online</a>. Your reference
    to everything that's great about PHP.

<li><a href="manual/html/">Plain HTML PHP Manual Online</a>. The very
    same manual in a light-weight, HTML 3.2 version without any bells or
    whistles.

<LI><A href="http://www.php.net/manual/">PHP Annotated Manual</A>. This
    is the same as the above, except there is a built-in errata/note system
    that users all around the world can (and have!) contributed to.

<LI><A href="http://www.php.net/manual/browse-errata.php3">PHP Manual
    Errata</A>. This is the collected errata from the on-line errata/note
    system.

<li><? download_link("bigmanual.html", "PHP HTML Manual (one BIG file)"); ?>
<li><? download_link("manual.zip", "PHP HTML Manual ZIP File"); ?>
<li><? download_link("manual.tar.gz", "PHP HTML Manual .tar.gz File"); ?>
<li><? download_link("manual.rtf", "PHP Manual RTF File"); ?>
<li><? download_link("manual.prc", "PHP Manual PalmPilot DOC File"); ?>
<li><? download_link("manual_a-l.pdf", "PHP PDF Manual Part 1"); ?>. Function Reference I (Adabas) - XXVI (LDAP).
<li><? download_link("manual_m-x.pdf", "PHP PDF Manual Part 2"); ?>. Function Reference XXVII (Mail) - LV (XML).

<li><a href="http://www.cityfujisawa.ne.jp/~louis/apps/phpfi/index.html"
    >Japanese translation of the PHP manual</a>

<li><a href="http://www.nexen.net/fr/aide/PHP/index.html">French translation of the PHP manual</a>

<li><a href="manual/phpfi2.html">PHP/FI 2.0 Manual</a>. This includes
    discussions on a few topics that aren't covered in the PHP 3 manual
    yet.

<li><?download_link("distributions/unsupported/manual-3_0_11.pdf", "PHP Manual in PDF format");?> This is a third-party conversion of the PHP manual to indexed PDF format. (This is completely unsupported, and lags behind the other formats of the documentation available here.)

<li><A href="/cvs.php3">Getting a CVS account</a>.  If you wish to help out
with the development of PHP, read this.
</ul>

<? commonFooter("") ?>
