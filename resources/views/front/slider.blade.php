<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay" data-alias="classic4export" data-source="gallery">
    <!-- START REVOLUTION SLIDER 5.4.8 auto mode -->
    <div id="rev_slider_4_1" class="rev_slider fullwidthabanner rev_slider_4_1_height" data-version="5.4.8.1">
        
        <ul>    <!-- SLIDE  -->
          
            <!-- SLIDE  -->
            @foreach (\App\Slider::get() as $slider)
                
            
            <li data-index="rs-12" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="images/slides/slider-mainbg-002.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('uploads/'.$slider->image) }}"  alt="" title="Home 1"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 7 -->
               
                <!-- LAYER NR. 8 -->
                <div class="tp-caption tp-resizeme" 
                    id="slide-2-layer-2" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['top','top','middle','middle']" data-voffset="['233','233','-77','-60']" 
                    data-fontsize="['60','60','50','40']"
                    data-lineheight="['75','75','75','60']"
                    data-fontweight="['700','700','700','700']"
                    data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text" 
                    data-responsive_offset="on" 
                    data-frames='[{"delay":370,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    >{!! $slider->title !!}</div>

                <!-- LAYER NR. 9 -->
          

                <!-- LAYER NR. 10 -->
                @if($slider->button_text != null)
                <a class="tp-caption tp-resizeme skin-flat-button" href="{{ $slider->url }}" target="_self"             
                    id="slide-2-layer-4" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['77','77','69','58']" 
                    
                    data-fontsize="['13','13','12','11']"
                    data-lineheight="['13','13','12','11']"
                    data-fontweight="['700','700','700','700']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-type="text" 
                    data-actions=''
                    data-responsive_offset="on" 
                    data-frames='[{"delay":1070,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[16,16,14,12]"
                    data-paddingright="[35,35,30,25]"
                    data-paddingbottom="[16,16,14,12]"
                    data-paddingleft="[35,35,30,25]"
                    >{{ $slider->button_text }}</a>
                    @endif
            </li>
            @endforeach
            <!-- SLIDE  -->
           
        </ul>
    </div>
</div>