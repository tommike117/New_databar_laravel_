<!DOCTYPE html>
<html>

<head>

    <base href="{{Request::url()}}">
    <input id='url' type="hidden" value="{{URL::to('/')}}/images/armor-x/">
    <input id='path_img' type="hidden" value="{{public_path('images')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        html {
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
        }

    </style>

    <title>Product</title>
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.common-material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.mobile.min.css" />

    <script src="https://kendo.cdn.telerik.com/2019.2.619/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2019.2.619/js/kendo.all.min.js"></script>


</head>

<body>
    <div id="example">
        <form action="insert-product-detail" method="post" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <textarea id="editor" rows="10" cols="30" style="width:100%;height:400px">
                &lt;p&gt;&lt;img src=&quot;../content/web/editor/kendo-ui-web.png&quot; alt=&quot;Editor for ASP.NET MVC logo&quot; style=&quot;display:block;margin-left:auto;margin-right:auto;&quot; /&gt;&lt;/p&gt;
                &lt;p&gt;
                    Kendo UI Editor allows your users to edit HTML in a familiar, user-friendly way.&lt;br /&gt;
                    In this version, the Editor provides the core HTML editing engine, which includes basic text formatting, hyperlinks, lists,
                    and image handling. The widget &lt;strong&gt;outputs identical HTML&lt;/strong&gt; across all major browsers, follows
                    accessibility standards and provides API for content manipulation.
                &lt;/p&gt;
                &lt;p&gt;Features include:&lt;/p&gt;
                &lt;ul&gt;
                    &lt;li&gt;Text formatting &amp; alignment&lt;/li&gt;
                    &lt;li&gt;Bulleted and numbered lists&lt;/li&gt;
                    &lt;li&gt;Hyperlink and image dialogs&lt;/li&gt;
                    &lt;li&gt;Cross-browser support&lt;/li&gt;
                    &lt;li&gt;Identical HTML output across browsers&lt;/li&gt;
                    &lt;li&gt;Gracefully degrades to a &lt;code&gt;textarea&lt;/code&gt; when JavaScript is turned off&lt;/li&gt;
                &lt;/ul&gt;
                &lt;p&gt;
                    Read &lt;a href=&quot;http://docs.telerik.com/kendo-ui&quot;&gt;more details&lt;/a&gt; or send us your
                    &lt;a href=&quot;http://www.telerik.com/forums/&quot;&gt;feedback&lt;/a&gt;!
                &lt;/p&gt;
            </textarea>
            <input type="submit" id="submit">

        </form>

        <div id='text'></div>

        <script>
            /*
                        imageBrowser: {
                           messages: {
                            dropFilesHere: "Drop files here"
                           },
                           transport: {
                                read: "/kendo-ui/service/ImageBrowser/Read",
                                destroy: {
                                    url: "/kendo-ui/service/ImageBrowser/Destroy",
                                    type: "POST"
                                },
                                create: {
                                    url: "/kendo-ui/service/ImageBrowser/Create",
                                    type: "POST"
                                },
                                //thumbnailUrl: "/kendo-ui/service/ImageBrowser/Thumbnail",
                                uploadUrl: "/admin/product/insert-product-detail/img_read",
                                //imageUrl: "/kendo-ui/service/ImageBrowser/Image?path={0}"
                           }
                        }
            });*/

            $("#editor").kendoEditor({
                encoded: false,
                tools: [
                    "bold",
                    "italic",
                    "underline",
                    "strikethrough",
                    "justifyLeft",
                    "justifyCenter",
                    "justifyRight",
                    "justifyFull",
                    "insertUnorderedList",
                    "insertOrderedList",
                    "indent",
                    "outdent",
                    "createLink",
                    "unlink",
                    "insertImage",
                    "insertFile",
                    "subscript",
                    "superscript",
                    "tableWizard",
                    "createTable",
                    "addRowAbove",
                    "addRowBelow",
                    "addColumnLeft",
                    "addColumnRight",
                    "deleteRow",
                    "deleteColumn",
                    "viewHtml",
                    "formatting",
                    "cleanFormatting",
                    "fontName",
                    "fontSize",
                    "foreColor",
                    "backColor",
                    "print", 
                ],
                imageBrowser: {
                    transport: {
                        read: function (options) {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            var url = $('input#url').val();
                            var path_img = $('input#path_img').val();
                            $.ajax({
                                url: '/admin/product/insert-product-detail/img_read',
                                type: 'POST',
                                dataType: 'json',
                                data: {
                                    url: url,
                                    path_img: path_img
                                },
                                success: function (result, status, xhr) {
                                    for (var i = 0; i < result.length; i++) {
                                        $("div.k-loading-mask.k-opaque").after(
                                            '<li class="k-tile" onclick="myFunction(this)" data-type="f"><div class="k-thumb"><img alt="dojo-banner.jpg" src="' +
                                            $('input#url').val() + '' + result[i].name +
                                            '"class="k-image" style="width: 80px; height: 80px;"></div><strong>' +
                                            result[i].name +
                                            '</strong><span class="k-filesize">' + result[
                                                i].size + ' Byte</span> </li>');
                                    }

                                    $("div.k-loading-mask.k-opaque").remove();
                                },
                                error: function (result, status, error) {
                                    console.log(result.message);
                                }
                            });

                        },
                        //thumbnailUrl: "/kendo-ui/service/ImageBrowser/Thumbnail",
                        uploadUrl: "/admin/product/insert-product-detail/upload_img",
                        //imageUrl: "/kendo-ui/service/ImageBrowser/Image?path={0}"
                    }
                }
            });

            function myFunction(el) {
                var value = $(el).find("strong").text();
                $('input#k-editor-image-url').val($('input#url').val() + value);
            }

        </script>
    </div>

    <script>
        $(document).ready(function () {
            $("#submit").on('click', function (event) {
                event.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var span_primary = $('#editor').val();
                $.ajax({
                    url: '/admin/product/insert-product-detail',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        span_primary: span_primary
                    },
                    success: function (result, status, xhr) {
                        $("#text").html(result.description);
                    },
                    error: function (result, status, error) {
                        console.log(result.message);
                    }
                });
            });


            /* $("a.k-tool.k-group-end").on('click', function (event) {
                 event.preventDefault();
                 $.ajaxSetup({
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
                 });
                 var span_primary = $('#editor').val();
                 $.ajax({
                     url: '/admin/product/insert-product-detail/img_read',
                     type: 'POST',
                     dataType: 'json',
                     data: {
                         span_primary: span_primary
                     },
                     success: function (result, status, xhr) {
                        // if (result.success == 'true') {
                        //     alert(result.message);
                             //location.reload();
                             console.log(result);
                             //$("#text").html(result.description);
                             

                        //} else if (result.success == 'false') {
                          //   alert(result.message);
                            // System.IO.File.Exists(physicalPath);
                       //  }
                     },
                     error: function (result, status, error) {
                         console.log(result.message);
                     }
                 });
             });*/

        });

    </script>
</body>

</html>
