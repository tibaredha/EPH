<div>
<script>
function innerCalendarCode() {

    function montharr(m0, m1, m2, m3, m4, m5, m6, m7, m8, m9, m10, m11) {
        this[0] = m0;
        this[1] = m1;
        this[2] = m2;
        this[3] = m3;
        this[4] = m4;
        this[5] = m5;
        this[6] = m6;
        this[7] = m7;
        this[8] = m8;
        this[9] = m9;
        this[10] = m10;
        this[11] = m11;
    }


    function calendar() {
        var monthNames = "JanFebMarAprMayJunJulAugSepOctNovDec";
        var today = new Date();
        var thisDay;
        var monthDays = new montharr(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
        year = today.getYear();
        if (year <= 200) {
            year += 1900;
        }
        thisDay = today.getDate();
        if (((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0)) {
            monthDays[1] = 29;
        }
        nDays = monthDays[today.getMonth()];
        firstDay = today;
        firstDay.setDate(1);
        testMe = firstDay.getDate();
        if (testMe == 2) {
            firstDay.setDate(0);
        }
        startDay = firstDay.getDay();
        document.writeln("<CENTER>");
        document.write("<TABLE BORDER='1' BGCOLOR=White>");
        document.write("<TR><TH COLSPAN=7>");
        document.write(monthNames.substring(today.getMonth() * 3, (today.getMonth() + 1) * 3));
        document.write(". ");
        document.write(year);
        document.write("<TR><TH>Sun<TH>Mon<TH>Tue<TH>Wed<TH>Thu<TH>Fri<TH>Sat");
        document.write("<TR>");
        column = 0;
        for (i = 0; i < startDay; i++) {
            document.write("<TD>");
            column++;
        }
        for (i = 1; i <= nDays; i++) {
            document.write("<TD>");
            if (i == thisDay) {
                document.write("<FONT COLOR=\"#FF0000\">");
            }
            document.write(i);
            if (i == thisDay) {
                document.write("</FONT>");
            }
            column++;
            if (column == 7) {
                document.write("<TR>");
                column = 0;
            }
        }
        document.write("</TABLE>");
        document.writeln("</CENTER>");
    }

    calendar();
}


  innerCalendarCode();</script>
  </div>
