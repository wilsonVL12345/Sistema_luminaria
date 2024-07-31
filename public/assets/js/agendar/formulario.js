/* let fp=flatpickr("#txtfechaprogramada",{
    dateFormat: "Y-m-d",
    
});
 */
 // Función para generar fechas aleatorias en julio
 const highlightDates = ["2024-07-10", "2024-07-12", "2024-07-19", "2024-07-26"];

 // Configurar flatpickr
 let fp = flatpickr("#txtfechaprogramada", {
     dateFormat: "Y-m-d",
     onReady: function(selectedDates, dateStr, instance) {
         // Resaltar las fechas específicas
         highlightDates.forEach(dateStr => {
             const dateElement = instance.calendarContainer.querySelector(`[data-date="${dateStr}"]`);
             if (dateElement) {
                 dateElement.classList.add('highlighted');
             }
         });
     }
 });
