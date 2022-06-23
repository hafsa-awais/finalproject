window.onload = (e) => {
    // const buttondis = document.getElementById("buttonCalendar");
    const linkedPicker1Element = document.getElementById("linkedPickers1");
    const linked1 = new tempusDominus.TempusDominus(linkedPicker1Element);
    const linked2 = new tempusDominus.TempusDominus(
        document.getElementById("linkedPickers2"),
        {
            useCurrent: false,
        }
    );

    let date1;
    let date2;

    //using event listeners
    linkedPicker1Element.addEventListener(
        tempusDominus.Namespace.events.change,
        (e) => {
            linked2.updateOptions({
                restrictions: {
                    minDate: e.detail.date,
                },
            });
            date1 = e.detail.date;
        }
    );

    //using subscribe method
    const subscription = linked2.subscribe(
        tempusDominus.Namespace.events.change,
        (e) => {
            linked1.updateOptions({
                restrictions: {
                    maxDate: e.date,
                },
            });
            date2 = e.date;
            daysLag = Math.ceil(
                Math.abs(date2.getTime() - date1.getTime()) / (1000 * 3600 * 24)
            );
            console.log(daysLag);
            const price = document.getElementsByClassName("card-header")[0].getAttribute('data-price');
            const total = document.getElementsByClassName("card-text")[0];
            console.log(parseFloat(price))
            total.innerHTML = `Total prise ${daysLag * parseFloat(price)}`




        }
    );
};
