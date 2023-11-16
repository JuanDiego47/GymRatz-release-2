function pdf() {
    var doc = new jsPDF();
    doc.text(20, 20, 'Texto 1.');
    doc.setFont("courier");
    doc.text(20, 30, 'Texto 2');
    doc.save('Test.pdf');
}