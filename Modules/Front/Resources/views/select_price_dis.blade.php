@if($row->section=='جديد اخر رشفة')
<a href="{{route('pay',['cat_id'=>$row->id,'name'=>$row->name,'section'=>$row->section,
    'sm'=>'6','md'=>'9','lg'=>'12','leter'=>'20','leterhalf'=>'25','fiveleter'=>'80'])}}">
    <button disabled  type="button" class="btn btn-warning">تســــوق</button></a>
@elseif($row->section=='قسم عصير الشمندر')
<a href="{{route('pay',['cat_id'=>$row->id,'name'=>$row->name,'section'=>$row->section,
    'sm'=>'5','md'=>'8','lg'=>'10','leter'=>'15','leterhalf'=>'20','fiveleter'=>'70'])}}">
    <button disabled  type="button" class="btn btn-warning">تســــوق</button></a>
@elseif($row->section=='قسم الميلك شيك')
<a href="{{route('pay',['cat_id'=>$row->id,'name'=>$row->name,'section'=>$row->section,
    'sm'=>'0','md'=>'9','lg'=>'12','leter'=>'0','leterhalf'=>'0','fiveleter'=>'0'])}}">
    <button disabled  type="button" class="btn btn-warning">تســــوق</button></a>
@elseif($row->section=='قسم مشروبات الطاقة')
<a href="{{route('pay',['cat_id'=>$row->id,'name'=>$row->name,'section'=>$row->section,
    'sm'=>'0','md'=>'9','lg'=>'12','leter'=>'0','leterhalf'=>'0','fiveleter'=>'0'])}}">
    <button disabled  type="button" class="btn btn-warning">تســــوق</button></a>

@elseif($row->section=='قسم العرايسى والخلطات الاخرى')
<a href="{{route('pay',['cat_id'=>$row->id,'name'=>$row->name,'section'=>$row->section,
    'sm'=>'6','md'=>'9','lg'=>'12','leter'=>'20','leterhalf'=>'25','fiveleter'=>'80'])}}">
    <button disabled  type="button" class="btn btn-warning">تســــوق</button></a>

@elseif($row->section=='الخلطات الاخرى')
<a href="{{route('pay',['cat_id'=>$row->id,'name'=>$row->name,'section'=>$row->section,
    'sm'=>'0','md'=>'10','lg'=>'12','leter'=>'0','leterhalf'=>'0','fiveleter'=>'0'])}}">
    <button disabled  type="button" class="btn btn-warning">تســــوق</button></a>

@elseif($row->section=='قسم العصائر المتنوعة')
<a href="{{route('pay',['cat_id'=>$row->id,'name'=>$row->name,'section'=>$row->section,
    'sm'=>'5','md'=>'7','lg'=>'10','leter'=>'15','leterhalf'=>'20','fiveleter'=>'70'])}}">
    <button disabled  type="button" class="btn btn-warning">تســــوق</button></a>

@elseif($row->section=='العصائر الطازجة ')
<a href="{{route('pay',['cat_id'=>$row->id,'name'=>$row->name,'section'=>$row->section,
    'sm'=>'5','md'=>'7','lg'=>'10','leter'=>'15','leterhalf'=>'20','fiveleter'=>'70'])}}">
    <button disabled  type="button" class="btn btn-warning">تســــوق</button></a>

@elseif($row->section=='العصائر الطازجة (نوع جديد)')
<a href="{{route('pay',['cat_id'=>$row->id,'name'=>$row->name,'section'=>$row->section,
    'sm'=>'6','md'=>'9','lg'=>'12','leter'=>'20','leterhalf'=>'25','fiveleter'=>'80'])}}">
    <button disabled  type="button" class="btn btn-warning">تســــوق</button></a>
    
@elseif($row->section=='ما يميزنا- خلطات خاصة بالمحل')
<a href="{{route('pay',['cat_id'=>$row->id,'name'=>$row->name,'section'=>$row->section,
    'sm'=>'6','md'=>'9','lg'=>'12','leter'=>'20','leterhalf'=>'25','fiveleter'=>'80'])}}">
    <button disabled  type="button" class="btn btn-warning">تســــوق</button></a>

@elseif($row->section=='قسم الموهيتو')
<a href="{{route('pay',['cat_id'=>$row->id,'name'=>$row->name,'section'=>$row->section,
    'sm'=>'0','md'=>'9','lg'=>'12','leter'=>'0','leterhalf'=>'0','fiveleter'=>'0'])}}">
    <button disabled  type="button" class="btn btn-warning">تســــوق</button></a>
    
@elseif($row->section=='سلطة فواكه (صحن)')
<a href="{{route('pay',['cat_id'=>$row->id,'name'=>$row->name,'section'=>$row->section,
    'sm'=>'15','md'=>'30','lg'=>'80','leter'=>'0','leterhalf'=>'0','fiveleter'=>'0'])}}">
    <button disabled  type="button" class="btn btn-warning">تســــوق</button></a>


@elseif($row->section=='قطع الفواكه السادة')
<a href="{{route('pay',['cat_id'=>$row->id,'name'=>$row->name,'section'=>$row->section,
    'sm'=>'0','md'=>'12','lg'=>'15','leter'=>'0','leterhalf'=>'0','fiveleter'=>'0'])}}">
    <button disabled  type="button" class="btn btn-warning">تســــوق</button></a>
    
@endif