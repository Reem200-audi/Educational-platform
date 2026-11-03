<h2>نتيجتك في الدورة</h2>
<p>النسبة المئوية: <strong>{{ $percentage }}%</strong></p>

@if($passed)
    <p style="color:green;">🎉 مبروك! اجتزت الدورة بنجاح.</p>
@else
    <p style="color:red;">😔 لم تجتز الدورة، حاول مرة أخرى.</p>
@endif
