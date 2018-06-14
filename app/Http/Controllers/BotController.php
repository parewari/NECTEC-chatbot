<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

///////////// ส่วนของการเรียกใช้งาน class ผ่าน namespace
use LINE\LINEBot;
use LINE\LINEBot\HTTPClient;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
//use LINE\LINEBot\Event;
//use LINE\LINEBot\Event\BaseEvent;
//use LINE\LINEBot\Event\MessageEvent;
use LINE\LINEBot\MessageBuilder;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;
use LINE\LINEBot\MessageBuilder\StickerMessageBuilder;
use LINE\LINEBot\MessageBuilder\ImageMessageBuilder;
use LINE\LINEBot\MessageBuilder\LocationMessageBuilder;
use LINE\LINEBot\MessageBuilder\AudioMessageBuilder;
use LINE\LINEBot\MessageBuilder\VideoMessageBuilder;
use LINE\LINEBot\ImagemapActionBuilder;
use LINE\LINEBot\ImagemapActionBuilder\AreaBuilder;
use LINE\LINEBot\ImagemapActionBuilder\ImagemapMessageActionBuilder ;
use LINE\LINEBot\ImagemapActionBuilder\ImagemapUriActionBuilder;
use LINE\LINEBot\MessageBuilder\Imagemap\BaseSizeBuilder;
use LINE\LINEBot\MessageBuilder\ImagemapMessageBuilder;
use LINE\LINEBot\MessageBuilder\MultiMessageBuilder;
use LINE\LINEBot\TemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\DatetimePickerTemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateMessageBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ConfirmTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ImageCarouselTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ImageCarouselColumnTemplateBuilder;

class BotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     // เชื่อมต่อกับ LINE Messaging API
     $httpClient = new CurlHTTPClient("UUms/W0POS3Atn1y12kA52T/hNh5G+RLuCA5AhgwRiUU1pJgTmLDMxTcfK/ZbaA/eFhthULCJtCqRqH10s51Cu17uGI5zMhw7dViMpsmqo4JNZtO/DDHA0L3AObu/5G1E+hyS99CCiarLGZZ4u2EvQdB04t89/1O/w1cDnyilFU=");
     $bot = new LINEBot($httpClient, array('channelSecret' => "e36b1b466367920082f9030c4241d794"));

     // คำสั่งรอรับการส่งค่ามาของ LINE Messaging API
     $content = file_get_contents('php://input');

     // แปลงข้อความรูปแบบ JSON  ให้อยู่ในโครงสร้างตัวแปร array
     $events = json_decode($content, true);
     if(!is_null($events)){
         // ถ้ามีค่า สร้างตัวแปรเก็บ replyToken ไว้ใช้งาน
         $replyToken = $events['events'][0]['replyToken'];
     }
     // ส่วนของคำสั่งจัดเตียมรูปแบบข้อความสำหรับส่ง
     //$textMessageBuilder = new TextMessageBuilder(json_encode($events));
      $textMessageBuilder = new TextMessageBuilder('55555');
     //l ส่วนของคำสั่งตอบกลับข้อความ
     $response = $bot->replyMessage($replyToken,$textMessageBuilder);
     if ($response->isSucceeded()) {
         echo 'Succeeded!';
         return;
     }

     // Failed
     echo $response->getHTTPStatus() . ' ' . $response->getRawBody();


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
