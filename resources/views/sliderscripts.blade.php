<script type="text/javascript">
    let lastSync = (new Date()).toLocaleString()
    function showTime() {
        let date = new Date();
        let hh = date.getHours();
        let mm = date.getMinutes();
        let ss = date.getSeconds();
        let dd = date.getUTCDate();
        let ms = date.getUTCMonth()+1;
        let yy = date.getFullYear();
        let extraMonthNull = (ms < 10) ? ".0":".";
        let extraMinuteNull = (mm < 10) ? ":0":":";
        let dayDate = dd + extraMonthNull + ms + "." + yy;
        let time = hh + extraMinuteNull + mm;
        document.getElementById('date').innerHTML = dayDate;
        document.getElementById('time').innerHTML = time;
    }
    setInterval(showTime,  1000);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function checkUpdated() {
        $.ajax({
            method: "POST",
            url: "/displayboard/public/slider/updatedSince/{{$slider->id}}",
            data: { last_sync: lastSync }
        }).done(function(data) {
            lastSync = (new Date()).toLocaleString()
            if(data.reload) {
                location.reload()
            }
        })
    }

    setInterval(checkUpdated,  2000);
</script>
