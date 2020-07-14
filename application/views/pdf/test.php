<!-- documentation -->
<!-- https://ourcodeworld.com/articles/read/687/how-to-configure-a-header-and-footer-in-dompdf -->
<style>
    /** Define the header rules **/
    header {
        position: fixed;
        top: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;
        background-color: #03a9f4;
    }

    footer {
        position: fixed;
        bottom: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;
        background-color: #03a9f4;
    }

    @page {
        margin: 0cm 0cm;
    }

    /** Define now the real margins of every page in the PDF **/
    body {
        margin-top: 2cm;
        margin-left: 2cm;
        margin-right: 2cm;
        margin-bottom: 2cm;
    }

    header>img {
        margin-left: 2cm;
        margin-top: 0.5cm;
    }

    .page_break {
        page-break-before: always;
    }

    .column {
        float: left;
        width: 50%;
    }

    .column-3 {
        float: left;
        width: 33.3%;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
</style>


<header>
    ini header
</header>

<body>
    Content Page 1
    <p class="page_break"></p>
    Content Page 2
</body>

<footer>
    ini footer
</footer>