<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0" xmlns:g="http://base.google.com/ns/1.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel> 
    <channel>
        <title>Macmel Feed</title>
        <description>Product Feed for Facebook</description> 
        <link>https://www.macmel.pt</link>
        <atom:link href="https://feed.macmel.pt/facebook.xml" rel="self" type="application/rss+xml" />
        @foreach($results as $product)
            @if( $product->data->language_id == 2 && !empty($product->image) &&  !empty($product->price) && !empty($product->data->description))
            @php
               if($product->discount) {
                    $price = $product->discount->price; 
               }else {
                    $price = $product->price; 
               }
            @endphp
        
                <item>
                    <g:item_group_id>{{$product->product_id}}</g:item_group_id>
                    <g:gtin>{{$product->model}}</g:gtin>
                    <g:google_product_category>Toys &amp; Games > Toys > Executive Toys > Magnet Toys</g:google_product_category>  
                    <g:id>{{$product->product_id}}</g:id>
                    <g:title>{{$product->data->name}}</g:title>
                    <g:link>https://www.macmel.pt/index.php?route=product/product&amp;product_id={{$product->product_id}}</g:link>
                 
                    <g:description>{{strip_tags(html_entity_decode($product->data->description))}}</g:description>
                    <g:brand>Macmel</g:brand>
                    <g:condition>new</g:condition>
                    @if(!empty($product->image))
                    <g:image_link>https://www.macmel.pt/image/{{$product->image}}</g:image_link>
                    @endif
                    <g:brand>Macmel</g:brand>
                    <g:model_number>{{$product->model}}</g:model_number>
                    <g:identifier_exists>false</g:identifier_exists>
                    @if($product->tax->tax_class_id == 14)
                        @php
                             $price = $price * 1.23;   
                        @endphp
                    @endif
                    @if($product->tax->tax_class_id == 15)
                        @php
                             $price = $price * 1.13;   
                        @endphp
                    @endif
                    @if($product->tax->tax_class_id == 16)
                        @php
                             $price = $price * 1.06;  
                            
                        @endphp
                    @endif
                    <g:price>{{number_format( $price, 2, '.', '')}}€</g:price> 
                    <g:google_product_category>1</g:google_product_category>
                    <g:product_type>Utilitários</g:product_type>
                    <g:quantity>{{$product->quantity}}</g:quantity>
                    <g:weight>{{ number_format($product->weight,2, '.', '')}}kg</g:weight>
                    <g:availability>in stock</g:availability>
                </item>
            @endif

            
        @endforeach
    </channel>
</rss>