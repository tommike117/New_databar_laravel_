<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/MY-ADMIN-BACKUP-DATABASE-ALL-AUTOMATIC', 'System\BackupController@backup')->name('backup.all');
// Route::get('/product/non-samsung/ecom-ex/tablet/Tab-Ex-02-Zone-1-DIV-1', function () {



//     return breadcrumb('product');
// });


// Route::get('/test', function () {
//     $token = Str::random(32);
//     $cookie = Cookie::get();
//     return $cookie;
//     // return view('includes.navbar-new');
// });

// Route::get('sendbasicemail','MailController@basic_email');
// Route::get('sendhtmlemail','MailController@html_email');
// Route::get('sendattachmentemail','MailController@attachment_email');
// Route::get('/send/email', 'HomeController@mail');
Route::get('/SendMailservice', 'SendEmailservice@index');
Route::post('/SendEmailservice/send','SendEmailservice@send');

// download function
Route::get('/viewALLdownloadfile', 'DownloadController@downloadcat');



Route::get('/home', function () {
    return view('pages/home');
})->name('home-page');
Route::get('/', function () {
    return redirect('/home');
});

Route::get('/about-us', function () {
    return view('pages/about-us');
})->name('about-us');

Route::get('/brands', function () {
    return view('pages/brands');
})->name('brands');

Route::get('/become-a-reseller', function () {
    return view('pages/partners');
})->name('reseller');

Route::get('/customers', 'NewDatabarProducts@customers')->name('customers');


Route::get('/services', function () {
    return view('pages/services');
})->name('services');

Route::get('/contact', function () {
    return view('pages/contact');
})->name('contact');

Route::get('/products', function () {
    return view('pages/products');
})->name('products');

// Route::get('products/samsung/smartphones', 'NewDatabarProducts@samsung_smartphones');

Route::group(['prefix' => 'products'], function () {
    Route::group(['prefix' => '/samsung'], function () {
        Route::get('/test', function () {
            return view('/pages/products/samsung/landing-page/test');
        });
        Route::get('/', function () {
            return view('/pages/products/samsung/landing-page/index');
        });
        // Smartphone Samsung
        Route::get('/smartphones', 'NewDatabarProducts@samsung_smartphones');

        Route::get('/smartphones/galaxy-s20', function () {
            return redirect('/products/samsung/mobile/smartphone/Galaxy-s20');
        });
        // Smartphone Samsung
        Route::get('/smartphones', 'NewDatabarProducts@samsung_smartphones');

            Route::get('/smartphones/Samsung-Galaxy-Xcover-Pro', function () {
                return view('/pages/products/samsung/Samsung-Galaxy-Xcover-Pro');
            });
            Route::get('/smartphones/Samsung-Galaxy-Xcover-4', function () {
                return view('/pages/products/samsung/Samsung-Galaxy-Xcover-4');
            });
            Route::get('/smartphones/galaxy-z-flip', function () {
                return view('/pages/products/samsung/galaxy-z-flip');
            });
            Route::get('/smartphones/Galaxy-S20', function () {
                return view('/pages/products/samsung/Galaxy-S20');
            });
            Route::get('/smartphones/Samsung-Galaxy-Note10', function () {
                return view('/pages/products/samsung/Samsung-Galaxy-Note10');
            });
            Route::get('/smartphones/Samsung-Galaxy-S10', function () {
                return view('/pages/products/samsung/Samsung-Galaxy-S10');
            });
            Route::get('/smartphones/Galaxy-M31', function () {
                return view('/pages/products/samsung/Galaxy-M31');
            });
            Route::get('/smartphones/Galaxy-M21', function () {
                return view('/pages/products/samsung/Galaxy-M21');
            });
            Route::get('/smartphones/Galaxy-M11', function () {
                return view('/pages/products/samsung/Galaxy-M11');
            });
            Route::get('/smartphones/galaxy-a71', function () {
                return view('/pages/products/samsung/galaxy-a71');
            });
            Route::get('/smartphones/galaxy-a51', function () {
                return view('/pages/products/samsung/galaxy-a51');
            });
            Route::get('/smartphones/galaxy-a31', function () {
                return view('/pages/products/samsung/galaxy-a31');
            });
            Route::get('/smartphones/galaxy-a21s', function () {
                return view('/pages/products/samsung/galaxy-a21s');
            });
            Route::get('/smartphones/galaxy-a20s', function () {
                return view('/pages/products/samsung/galaxy-a20s');
            });
            Route::get('/smartphones/galaxy-a11', function () {
                return view('/pages/products/samsung/galaxy-a11');
            });
            Route::get('/smartphones/galaxy-a01', function () {
                return view('/pages/products/samsung/galaxy-a01');
            });



        Route::get('/tablets', 'NewDatabarProducts@samsung_tablets');

            Route::get('/tablets/Galaxy-Tab-Active-Pro', function () {
                return view('/pages/products/samsung/Galaxy-Tab-Active-Pro');
            });
            Route::get('/tablets/Galaxy-Tab-Active2', function () {
                return view('/pages/products/samsung/Galaxy-Tab-Active2');
            });
            Route::get('/tablets/Galaxy-Tab-S4-10-5', function () {
                return view('/pages/products/samsung/Galaxy-Tab-S4-10-5');
            });
            Route::get('/tablets/Galaxy-Tab-S5e', function () {
                return view('/pages/products/samsung/Galaxy-Tab-S5e');
            });
            Route::get('/tablets/Galaxy-Tab-S6', function () {
                return view('/pages/products/samsung/galaxy-Tab-S6');
            });
            Route::get('/tablets/galaxy-tab-s6-lte', function () {
                return view('/pages/products/samsung/galaxy-tab-s6-lte');
            });
            Route::get('/tablets/Galaxy-Tab-A-10-1', function () {
                return view('/pages/products/samsung/Galaxy-Tab-A-10-1');
            });
            Route::get('/tablets/Galaxy-Tab-A-2019', function () {
                return view('/pages/products/samsung/Galaxy-Tab-A-2019');
            });
            Route::get('/tablets/galaxy-tab-a-2019-plus', function () {
                return view('/pages/products/samsung/galaxy-tab-a-2019-plus');
            });

        Route::get('/knox', function () {
            return view('/pages/products/samsung/samsung-knox/index');
        });
    });

    Route::group(['prefix' => '/armor-x'], function () {

        Route::get('/', function () {
            return view('/pages/products/armor-x/index');
        });
        Route::get('/device-case', function () {
            return view('/pages/products/armor-x/device-case');
        });
            Route::get('/device-case/water-proof-case-note20', function () {
                return view('/pages/products/armor-x/products/water-proof-case-note20');
            });
            Route::get('/device-case/rugged-case-gta-pro', function () {
                return view('/pages/products/armor-x/products/rugged-case-gta-pro');
            });
        Route::get('/mounting-product', function () {
            return view('/pages/products/armor-x/mounting-product');
        });
    });

    Route::group(['prefix' => '/caterpillar'], function () {

        Route::get('/', function () {
            return view('/pages/products/caterpillar/index');
        });
        Route::get('/smart-phone-cat','ProductListController@smart_phone_cat');
        Route::get('/smart-phone-cat/s62', function () {
            return view('/pages/products/caterpillar/products/smartphone/s62');
        });
        Route::get('/smart-phone-cat/s52', function () {
            return view('/pages/products/caterpillar/products/smartphone/s52');
        });
        Route::get('/smart-phone-cat/s42', function () {
            return view('/pages/products/caterpillar/products/smartphone/s42');
        });

        Route::get('/tablet-cat','ProductListController@tablet_cat');
        Route::get('/tablet-cat/t20', function () {
            return view('/pages/products/caterpillar/products/tablet/t20');
        });

    });

    Route::group(['prefix' => '/bixolon'], function () {

        Route::get('/', function () {
            return view('/pages/products/bixolon/index');
        });
        Route::get('/pos-printer','ProductListController@bixolon_pos_printer');
        Route::get('/pos-printer/q300', function () {
            return view('/pages/products/bixolon/products/pos/q300');
        });
        Route::get('/pos-printer/srp275', function () {
            return view('/pages/products/bixolon/products/pos/srp275');
        });

        Route::get('/mobile-printer','ProductListController@bixolon_mobile_printer');
        Route::get('/mobile-printer/l310', function () {
            return view('/pages/products/bixolon/products/mobile-printer/l310');
        });
        Route::get('/mobile-printer/r210', function () {
            return view('/pages/products/bixolon/products/mobile-printer/r210');
        });
    });

    Route::group(['prefix' => '/datalogic'], function () {

        Route::get('/', function () {
            return view('/pages/products/datalogic/index');
        });
        Route::get('/barcode-scanners','ProductListController@datalogic_barcode_scanners');

        Route::get('/mobile-computers','ProductListController@datalogic_mobile_computers');

        Route::get('/automation','ProductListController@datalogic_automation');
    });

    Route::group(['prefix' => '/ecom-ex'], function () {

        Route::get('/', function () {
            return view('/pages/products/ecom-ex/index');
        });
        Route::get('/tablet','ProductListController@ecom_tablet');

        Route::get('/smartphone','ProductListController@ecom_smartphone');
    });

    Route::group(['prefix' => '/gamber-johnson'], function () {

        Route::get('/', function () {
            return view('/pages/products/gamber-johnson/index', ['databar_logo_extra_class' => 'for-gamber-johnson']);
        });
        Route::get('/folklift', function () {
            return view('/pages/products/gamber-johnson/folklift-mounts', ['databar_logo_extra_class' => 'for-gamber-johnson']);
        });
        Route::get('/desktop-mounts', function () {
            return view('/pages/products/gamber-johnson/desktop-mounts', ['databar_logo_extra_class' => 'for-gamber-johnson']);
        });
        Route::get('/zirkona', function () {
            return view('/pages/products/gamber-johnson/zirkona-solution', ['databar_logo_extra_class' => 'for-gamber-johnson']);
        });
        Route::get('/semi-truck', function () {
            return view('/pages/products/gamber-johnson/semi-truck-mounts', ['databar_logo_extra_class' => 'for-gamber-johnson']);
        });
    });

    Route::group(['prefix' => '/ikey'], function () {

        Route::get('/', function () {
            return view('/pages/products/ikey/index');
        });
    });

    Route::group(['prefix' => '/ivymobility'], function () {

        Route::get('/', function () {
            return view('/pages/products/ivymobility/index');
        });
        Route::get('/sales-force-automation', function () {
            return view('/pages/products/ivymobility/sales-force-automation');
        });
        Route::get('/distributor-management', function () {
            return view('/pages/products/ivymobility/distributor-management');
        });
        Route::get('/direct-store-delivery', function () {
            return view('/pages/products/ivymobility/direct-store-delivery');
        });
        Route::get('/retail-execution', function () {
            return view('/pages/products/ivymobility/retail-execution');
        });
    });

    Route::group(['prefix' => '/koamtac'], function () {

        Route::get('/', function () {
            return view('/pages/products/koamtac/index');
        });
        Route::get('/pocket-scanner','ProductListController@koamtac_scanner');
        Route::get('/barcode-smartsled','ProductListController@koamtac_smartleds');
        Route::get('/accessories','ProductListController@accessories');
    });

    Route::group(['prefix' => '/ram-mounts'], function () {

        Route::get('/', function () {
            return view('/pages/products/ram-mount/index');
        });
        Route::get('/motocyle', function () {
            return view('/pages/products/ram-mount/motocyle');
        });
        Route::get('/tablet-mounts', function () {
            return view('/pages/products/ram-mount/tablet-mounts');
        });
        Route::get('/phone-mounts', function () {
            return view('/pages/products/ram-mount/phone-mounts');
        });
    });
    Route::group(['prefix' => '/sam4s'], function () {

        Route::get('/', function () {
            return view('/pages/products/sam4s/index');
        });

        Route::get('/handheld-computer','ProductListController@hand_held');

        Route::get('/receipt-printers','ProductListController@receipt_printers');
    });
    Route::group(['prefix' => '/star2star'], function () {

        Route::get('/', function () {
            return view('/pages/products/star2star/index');
        });
    });
    Route::group(['prefix' => '/xciel'], function () {
        Route::get('/', function () {
            return view('/pages/products/xciel/index');
        });
    });

    Route::group(['prefix' => '/toshiba-tec'], function () {
        Route::get('/', function () {
            return view('/pages/products/toshiba-tec/index');
        });
        Route::get('/label-printers','ProductListController@toshiba_tec_label_printers');
    });

    Route::group(['prefix' => '/unitech'], function () {
        Route::get('/', function () {
            return view('/pages/products/unitech/index');
        });
        Route::get('/mobile-computer','ProductListController@unitech_mobile_computer');

        Route::get('/enterprise-tablet','ProductListController@unitech_enterprise_tablet');
    });

    Route::group(['prefix' => '/wandera'], function () {
        Route::get('/', function () {
            return view('/pages/products/wandera/index');
        });
    });

    Route::group(['prefix' => '/weguard'], function () {
        Route::get('/', function () {
            return view('/pages/products/weguard/index');
        });
    });

    Route::group(['prefix' => '/42gears'], function () {
        Route::get('/', function () {
            return view('/pages/products/42gears/index');
        });
        Route::get('/sure_mdm', function () {
            return view('/pages/products/42gears/sure_mdm/sure_mdm');
        });
        Route::get('/sure_lock', function () {
            return view('/pages/products/42gears/sure_lock/sure_lock');
        });
            Route::get('/sure_lock/sure_lock_android', function () {
                return view('/pages/products/42gears/sure_lock/sure_lock_android');
            });
            Route::get('/sure_lock/sure_lock_window', function () {
                return view('/pages/products/42gears/sure_lock/sure_lock_window');
            });
            Route::get('/sure_lock/sure_lock_window_mobile', function () {
                return view('/pages/products/42gears/sure_lock/sure_lock_window_mobile');
            });
            Route::get('/sure_lock/sure_lock_window_watch', function () {
                return view('/pages/products/42gears/sure_lock/sure_lock_watch');
            });
        Route::get('/sure_fox', function () {
            return view('/pages/products/42gears/sure_fox/sure_fox');
            });
            Route::get('/sure_fox/sure_fox_android', function () {
                return view('/pages/products/42gears/sure_fox/sure_fox_android');
            });
            Route::get('/sure_fox/sure_fox_ios', function () {
                return view('/pages/products/42gears/sure_fox/sure_fox_ios');
            });
            Route::get('/sure_fox/sure_fox_window_mobile', function () {
                return view('/pages/products/42gears/sure_fox/sure_fox_window_mobile');
            });
        Route::get('/sure_video', function () {
            return view('/pages/products/42gears/sure_video/sure_video');
            });
            Route::get('/sure_video/sure_video_android', function () {
                return view('/pages/products/42gears/sure_video/sure_video_android');
            });
            Route::get('/sure_video/sure_video_ios', function () {
                return view('/pages/products/42gears/sure_video/sure_video_ios');
            });
            Route::get('/sure_video/sure_video_window_mobile', function () {
                return view('/pages/products/42gears/sure_video/sure_video_window_mobile');
            });
        });











});




// Route::get('/products/samsung/smartphones', function () {
//     // dd("123");
//     $smartphone = DB::table('db_product_list')
//     ->WHERE('Protype_ID', '7' )
//     ->orderBy('Plist_Priority','DESC')
//     ->get();
//     return view('/pages/products/samsung/samsung-mobile/index', [
//         'data'=> $smartphone
//         ]);
// });

// Route::get('products/samsung/mobile/smartphone/see-all-smartphone', function () {

//     $smartphone = DB::table('db_product_list')
//         ->WHERE('Protype_ID', '3' )
//         ->get();

//     return view('pages/products/samsung/see-all-smartphone', [
//         'data'=> $smartphone
//         ]);
// });




// Route::group([
//     'prefix' => 'product'
// ], function(){
//     Route::get('/samsung/mobile/tablet/galaxy-tab-a-2019-plus', function () {
//         return redirect('/products/samsung/mobile/tablet/galaxy-tab-a-2019-plus');
//     });
//     Route::get('/samsung/mobile/tablet/galaxy-tab-s6-lte', function () {
//         return redirect('/products/samsung/mobile/tablet/galaxy-tab-s6-lte');
//     });
//     Route::get('/samsung/mobile/smartphone/samsung-galaxy-s10', function () {
//         return redirect('/products/samsung/mobile/smartphone/Samsung-Galaxy-S10');
//     });
//     Route::get('/samsung/mobile/smartphone/galaxy-a10s', function () {
//         return redirect('/products/samsung/mobile/smartphone/Galaxy-a10s');
//     });
//     Route::get('/samsung/mobile/smartphone/galaxy-a20s', function () {
//         return redirect('/products/samsung/mobile/smartphone/Galaxy-a20s');
//     });
//     Route::get('/samsung/mobile/smartphone/galaxy-m11', function () {
//         return redirect('/products/samsung/mobile/smartphone/Galaxy-m11');
//     });
//     Route::get('/samsung/mobile/smartphone/galaxy-m11', function () {
//         return redirect('/products/samsung/mobile/smartphone/Galaxy-m11');
//     });
//     Route::get('/samsung/mobile/smartphone/galaxy-m21', function () {
//         return redirect('/products/samsung/mobile/smartphone/Galaxy-m21');
//     });
//     Route::get('/samsung/mobile/smartphone/galaxy-m31', function () {
//         return redirect('/products/samsung/mobile/smartphone/Galaxy-m31');
//     });
//     Route::get('/samsung/mobile/smartphone/galaxy-s20', function () {
//         return redirect('/products/samsung/mobile/smartphone/Galaxy-s20');
//     });
//     Route::get('/samsung/mobile/smartphone/galaxy-s21s', function () {
//         return redirect('/products/samsung/mobile/smartphone/Galaxy-s21s');
//     });
//     Route::get('/samsung/mobile/smartphone/galaxy-a31', function () {
//         return redirect('/products/samsung/mobile/smartphone/Galaxy-a31');
//     });
//     Route::get('/samsung/mobile/smartphone/galaxy-a51', function () {
//         return redirect('/products/samsung/mobile/smartphone/Galaxy-a51');
//     });
//     Route::get('/samsung/mobile/smartphone/galaxy-a71', function () {
//         return redirect('/products/samsung/mobile/smartphone/Galaxy-a71');
//     });
//     Route::get('non-samsung/bixolon/pos-printer/SRP-270/', function () {
//         return redirect('products/non-samsung/bixolon/pos-printer/SRP-270');
//     });
//     Route::get('non-samsung/42gears/sureLock/wearable/', function () {
//         return redirect('products/non-samsung/42gears/sureLock/wearable');
//     });
//     Route::get('non-samsung/koamtac/pocket-bluetooth-scanner/KDC200/', function () {
//         return redirect('products/non-samsung/koamtac/barcode-scanner/pocket-scanner/KDC200-Bluetooth-Barcode-Scanner');
//     });
//     Route::get('non-samsung/ikey/rugged_keyboard/industrial/IK-PAN-FZG1-NB-V5/', function () {
//         return redirect('products/non-samsung/ikey/rugged_keyboard/industrial/IK-PAN-FZG1-NB-V5');
//     });
//     Route::get('non-samsung/koamtac/pocket-bluetooth-scanner/KDC350', function () {
//         return redirect('products/non-samsung/koamtac/barcode-scanner/pocket-scanner/KDC350-Wireless-Barcode-Scanner');
//     });
//     Route::get('non-samsung/ikey/rugged_keyboard/industrial/DT-TB/', function () {
//         return redirect('products/non-samsung/ikey/rugged_keyboard/industrial/DT-TB/');
//     });
//     Route::get('non-samsung/ikey/rugged_keyboard/military/HP-1330-FSR/', function () {
//         return redirect('products/non-samsung/ikey/rugged_keyboard/military/HP-1330-FSR/');
//     });
//     Route::get('non-samsung/ikey/rugged_keyboard/industrial/MEM-114-OEM/', function () {
//         return redirect('products/non-samsung/ikey/rugged_keyboard/industrial/MEM-114-OEM/');
//     });
//     Route::get('non-samsung/ikey/rugged_keyboard/fleet/SL-86-911/', function () {
//         return redirect('products/non-samsung/ikey/rugged_keyboard/fleet/SL-86-911/');
//     });
// });

// Route::group([
//     'prefix' => 'products'
// ], function(){
//     Route::group([
//         'prefix' => 'samsung'
//     ], function(){
//         Route::get('mobile/smartphone', function () {
//             return view('pages/products/samsung/smartphone');
//         })->name('samsung.smartphone');
//         Route::get('mobile/tablet', function () {
//             return view('pages/products/samsung/Samsung-Tablet');
//         })->name('samsung.tablet');
//         Route::get('/mobile/smartphone/see-all-smartphone', 'ProductListController@samsung_smartphone_all')->name('samsung.smartphone.all');
//         Route::get('/mobile/tablet/see-all-tablet', 'ProductListController@samsung_tablet_all')->name('samsung.tablet.all');
//         Route::get('/mobile/smartphone/{name}', 'ProductListController@product_detail');
//         Route::get('/mobile/tablet/{name}', 'ProductListController@product_detail');
//     });
//     Route::group([
//         'prefix' => 'non-samsung'
//     ], function(){
//         // Armor-X
//         Route::get('/armor-x', function () {
//             return view('pages/products/armor-x/index');
//         })->name('armor-x.index');

//         // Bixolon
//         Route::group([
//             'prefix' => 'bixolon'
//         ], function(){
//             Route::get('/', function () {
//                 return view('pages/products/bixolon/index');
//             })->name('bixolon.landing-page');
//             Route::get('/mobile-printer', 'ProductListController@bixolon_mobile_printer')->name('bixolon.mobile-printer');
//             // Bixolon mobile printer model
//             Route::get('/mobile-printer/SPP-R310', function () {
//                 return view('pages/products/bixolon/SPP-R310');
//             });
//             Route::get('/mobile-printer/SPP-R200III', function () {
//                 return view('pages/products/bixolon/SPP-R200III');
//             });
//             Route::get('/mobile-printer/SPP-R210', function () {
//                 return view('pages/products/bixolon/SPP-R210');
//             });
//             Route::get('/mobile-printer/SPP-R410', function () {
//                 return view('pages/products/bixolon/SPP-R410');
//             });
//             Route::get('/mobile-printer/SPP-L3000', function () {
//                 return view('pages/products/bixolon/SPP-L3000');
//             });
//             // bixolon pos-printer model
//             // bixolon pos-printer index
//             Route::get('/pos-printer', 'ProductListController@bixolon_pos_printer')->name('bixolon.pos-printer');
//         });
//         // Route::get('/bixolon/pos-printer', function () {
//         //     return view('pages/products/bixolon/pos-printer');
        // });
        // Route::get('/bixolon/pos-printer/SRP-E300', function () {
        //     return view('pages/products/bixolon/SRP-E300');
        // });
        // Route::get('/bixolon/pos-printer/SRP-S300', function () {
        //     return view('pages/products/bixolon/SRP-S300');
        // });
        // Route::get('/bixolon/pos-printer/SRP-Q300', function () {
        //     return view('pages/products/bixolon/SRP-Q300');
        // });
        // Route::get('/bixolon/pos-printer/B-gate', function () {
        //     return view('pages/products/bixolon/B-gate');
        // });
        // Route::get('/bixolon/pos-printer/SRP-F310II', function () {
        //     return view('pages/products/bixolon/SRP-F310II');
        // });
        // Route::get('/bixolon/pos-printer/SRP-380', function () {
        //     return view('pages/products/bixolon/SRP-380');
        // });
        // Route::get('/bixolon/pos-printer/SRP-350plusIII', function () {
        //     return view('pages/products/bixolon/SRP-350plusIII');
        // });
        // Route::get('/bixolon/pos-printer/SRP-350III', function () {
        //     return view('pages/products/bixolon/SRP-350III');
        // });
        // Route::get('/bixolon/pos-printer/SRP-330II', function () {
        //     return view('pages/products/bixolon/SRP-330II');
        // });
        // Route::get('/bixolon/pos-printer/SRP-275III', function () {
        //     return view('pages/products/bixolon/SRP-275III');
        // });
        // Route::get('/bixolon/pos-printer/STP-103III', function () {
        //     return view('pages/products/bixolon/STP-103III');
        // });
        // Route::get('/bixolon/pos-printer/SRP-270', function () {
        //     return view('pages/products/bixolon/SRP-270');
        // });

//         // 42 Gears
//         Route::get('/42gears', function () {
//             return view('pages/products/42gears/index');
//         })->name('42gears.index');
//         Route::get('/42gears/sureMDM', function () {
//             return view('pages/products/42gears/suremdm');
//         })->name('42gears.sureMDM');
//         Route::get('/42gears/sureLock', function () {
//             return view('pages/products/42gears/surelock');
//         })->name('42gears.sureLock');
//         Route::get('/42gears/sureLock/android', function () {
//             return view('pages/products/42gears/surelock-android');
//         });
//         Route::get('/42gears/sureLock/window', function () {
//             return view('pages/products/42gears/surelock-window');
//         });
//         Route::get('/42gears/sureLock/window-ce', function () {
//             return view('pages/products/42gears/surelock-window-ce');
//         });
//         Route::get('/42gears/sureLock/wearable', function () {
//             return view('pages/products/42gears/surelock-wearable');
//         });

//         //42gears-surefox
//         Route::get('/42gears/sureFox', function () {
//             return view('pages/products/42gears/surefox');
//         })->name('42gears.sureFox');
//         Route::get('/42gears/sureFox/android', function () {
//             return view('pages/products/42gears/surefox-android');
//         })->name('42gears.sureFox-android');
//         Route::get('/42gears/sureFox/ios', function () {
//             return view('pages/products/42gears/surefox-ios');
//         })->name('42gears.sureFox-ios');
//         Route::get('/42gears/sureFox/window', function () {
//             return view('pages/products/42gears/surefox-window-ce');
//         })->name('42gears.sureFox-window-ce');

//         //surevideo
//         Route::get('/42gears/sureVideo', function () {
//             return view('pages/products/42gears/surevideo');
//         })->name('42gears.sureVideo');
//         Route::get('/42gears/sureVideo/android', function () {
//             return view('pages/products/42gears/surevideo-android');
//         })->name('42gears.sureVideo-android');
//         Route::get('/42gears/sureVideo/ios', function () {
//             return view('pages/products/42gears/surevideo-ios');
//         })->name('42gears.sureVideo-ios');
//         Route::get('/42gears/sureVideo/window', function () {
//             return view('pages/products/42gears/surevideo-window');
//         })->name('42gears.sureVideo-window');

//         // Wandera
//         Route::get('/wandera/mobile-threat-defense', function () {
//             return view('pages/products/wandera/wandera');
//         })->name('wandera.index');

//         // Unitech
//         Route::get('/unitech/mobile-computers', 'ProductListController@unitech_mobile_computers')->name('unitech.mobile-computers');
//         Route::get('/unitech/mobile-computers/PA760', function () {
//             return view('pages/products/unitech/PA760');
//         });
//         Route::get('/unitech/mobile-computers/PA730', function () {
//             return view('pages/products/unitech/PA730');
//         });
//         Route::get('/unitech/mobile-computers/PA726', function () {
//             return view('pages/products/unitech/PA726');
//         });
//         Route::get('/unitech/mobile-computers/EA602', function () {
//             return view('pages/products/unitech/EA602');
//         });
//         Route::get('/unitech/mobile-computers/EA500', function () {
//             return view('pages/products/unitech/EA500');
//         });
//         Route::get('/unitech/mobile-computers/EA300', function () {
//             return view('pages/products/unitech/EA300');
//         });
//         Route::get('/unitech/mobile-computers/TB160', function () {
//             return view('pages/products/unitech/TB160');
//         });


//         Route::get('/unitech/barcode-scanners', 'ProductListController@unitech_barcode_scanners')->name('unitech.barcode-scanners');
//         Route::get('/unitech/barcode-scanners/MS920P', function () {
//             return view('pages/products/unitech/MS920P');
//         });
//         // Star2Star
//         Route::get('/star2star', function () {
//             return view('pages/products/star2star/star2star');
//         })->name('star2star.index');

//         // Ram-Mount
//         Route::get('/ram-mount', function () {
//             return view('pages/products/ram-mount/ram-mount');
//         })->name('ram-mounts.index');

//         // Koamtac
//         Route::get('/koamtac/barcode-scanner', function () {
//             return view('pages/products/koamtac/barcode-scanner');
//         })->name('koamtac.barcode-scanner');
//         Route::get('/koamtac/barcode-scanner/accessories', function () {
//             return view('pages/products/koamtac/accessories');
//         })->name('koamtac.accessories');
//         Route::get('/koamtac/barcode-scanner/accessories/KDC-Smartphone-Tablet-Cases', function () {
//             return view('pages/products/koamtac/KDC-Smartphone-Tablet-Cases');
//         })->name('koamtac.KDC-Smartphone-Tablet-Cases');

//         Route::get('/koamtac/barcode-scanner/pocket-scanner', 'ProductListController@koamtac_pocket_scanner')->name('koamtac.pocket-scanner');
//         Route::get('/koamtac/barcode-scanner/pocket-scanner/{name}', 'ProductDetailController@detail_template');
//         Route::get('/koamtac/barcode-scanner/barcode-smartsled', 'ProductListController@koamtac_smartsled')->name('koamtac.smartsled');
//         Route::get('/koamtac/barcode-scanner/barcode-smartsled/{name}', 'ProductDetailController@detail_template');
//         Route::get('/koamtac/barcode-scanner/accessories', 'ProductListController@koamtac_accessories')->name('koamtac.accessories');
//         Route::get('/koamtac/barcode-scanner/accessories/{name}', 'ProductDetailController@detail_template');


//         // Ivymobility
//         Route::get('/ivymobility', function () {
//             return view('pages/products/ivymobility/index');
//         })->name('ivy.index');
//         Route::get('/ivymobility/distributor-management', function () {
//             return view('pages/products/ivymobility/distributor-management');
//         })->name('ivymobility.dms');
//         Route::get('/ivymobility/sales-force-automation', function () {
//             return view('pages/products/ivymobility/sales-force-automation');
//         })->name('ivymobility.sfa');
//         Route::get('/ivymobility/retail-execution', function () {
//             return view('pages/products/ivymobility/retail-execution');
//         })->name('ivymobility.rx');
//         Route::get('/ivymobility/direct-store-delivery', function () {
//             return view('pages/products/ivymobility/direct-store-delivery');
//         })->name('ivymobility.dsd');


//         // Caterpillar Index
//         Route::get('/Caterpillar', function () {
//             return view('pages/products/Caterpillar/index');
//         })->name('caterpillar.index');
//         Route::get('/Caterpillar/smartphone', function () {
//             return view('pages/products/Caterpillar/smartphone');
//         })->name('caterpillar.smartphone');
//         Route::get('/Caterpillar/smartphone/Cat-S61', function () {
//             return view('pages/products/Caterpillar/S61');
//         })->name('caterpillar.S61');
//         Route::get('/Caterpillar/smartphone/Cat-S31', function () {
//             return view('pages/products/Caterpillar/S31');
//         })->name('caterpillar.S31');
//         Route::get('/Caterpillar/smartphone/Cat-S41', function () {
//             return view('pages/products/Caterpillar/S41');
//         })->name('caterpillar.S41');
//         Route::get('/Caterpillar/smartphone/Cat-S48C', function () {
//             return view('pages/products/Caterpillar/S48C');
//         })->name('caterpillar.S48C');

//         Route::get('/Caterpillar/tablet/T-20', function () {
//             return view('pages/products/Caterpillar/tablet');
//         })->name('caterpillar.tablet');




//         // Datalogic Index
//         Route::get('/datalogic', function () {
//             return view('pages/products/datalogic/index');
//         })->name('datalogic.landing-page');
//         Route::get('/datalogic/barcode-scanner', function () {
//             return view('pages/products/datalogic/barcode-scanner');
//         })->name('datalogic.barcode-scanner');
//         Route::get('/datalogic/automation', function () {
//             return view('pages/products/datalogic/automation');
//         })->name('datalogic.automation');
//         Route::get('/datalogic/automation/stationary-industrial-scanners', function () {
//             return view('pages/products/datalogic/stationary-industrial-scanners');
//         })->name('datalogic.stationary-industrial-scanner');
//         Route::get('/datalogic/automation/laser-marking-systems', function () {
//             return view('pages/products/datalogic/laser-marking-systems');
//         })->name('datalogic.laser-marking-systems');
//         Route::get('/datalogic/automation/vision-systems', function () {
//             return view('pages/products/datalogic/vision-systems');
//         })->name('datalogic.vision-systems');
//         Route::get('/datalogic/automation/safety', function () {
//             return view('pages/products/datalogic/safety');
//         })->name('datalogic.safety');
//         Route::get('/datalogic/automation/sensors', function () {
//             return view('pages/products/datalogic/sensors');
//         })->name('datalogic.sensors');



//         Route::get('/datalogic/mobile-computer', 'ProductListController@datalogic_mobile_computer')->name('datalogic.mobile-computer');
//         Route::get('/datalogic/mobile-computer/{name}', 'ProductDetailController@detail_template');
//         Route::get('/datalogic/barcode-scanner/general-duty', 'ProductListController@datalogic_general_duty')->name('datalogic.general');
//         Route::get('/datalogic/barcode-scanner/general-duty/{name}', 'ProductDetailController@detail_template');
//         Route::get('/datalogic/barcode-scanner/industrial', 'ProductListController@datalogic_industrial')->name('datalogic.industrial');
//         Route::get('/datalogic/barcode-scanner/industrial/{name}', 'ProductDetailController@detail_template');
//         Route::get('/datalogic/automation/stationary-industrial-scanners', 'ProductListController@datalogic_stationary_industrial_scanners')->name('datalogic.stationary-industrial-scanner');
//         Route::get('/datalogic/automation/stationary-industrial-scanners/{name}', 'ProductDetailController@detail_template');
//         Route::get('/datalogic/automation/laser-marking-systems', 'ProductListController@datalogic_laser_marking_systems')->name('datalogic.laser-marking-systems');
//         Route::get('/datalogic/automation/laser-marking-systems/{name}', 'ProductDetailController@detail_template');
//         Route::get('/datalogic/automation/vision-systems', 'ProductListController@datalogic_vision_systems')->name('datalogic.vision-systems');
//         Route::get('/datalogic/automation/vision-systems/{name}', 'ProductDetailController@detail_template');
//         Route::get('/datalogic/automation/safety', 'ProductListController@datalogic_safety')->name('datalogic.safety');
//         Route::get('/datalogic/automation/safety/{name}', 'ProductDetailController@detail_template');
//         Route::get('/datalogic/automation/sensors', 'ProductListController@datalogic_sensors')->name('datalogic.sensors');
//         Route::get('/datalogic/automation/sensors/{name}', 'ProductDetailController@detail_template');


//         Route::group([
//             'prefix' => 'ecom-ex'
//         ], function(){
//             Route::get('/', function () {
//                 return view('pages/products/ecom-ex/index');
//             })->name('ecom-ex.index');
//             Route::get('tablet', 'ProductListController@ecom_tablet')->name('ecom-ex.tablet');
//             Route::get('/tablet/Tab-Ex-02-Zone-1-DIV-1', function () {
//                 return view('pages/products/ecom-ex/Tab-Ex-02-Zone-1-DIV-1');
//             });
//             Route::get('/tablet/Tab-Ex-02-Zone-2-DIV-2', function () {
//                 return view('pages/products/ecom-ex/Tab-Ex-02-Zone-2-DIV-2');
//             });
//             Route::get('/tablet/Tab-Ex-01-Zone-1-DIV-1', function () {
//                 return view('pages/products/ecom-ex/Tab-Ex-01-Zone-1-DIV-1');
//             });
//             Route::get('/tablet/Tab-Ex-01-Zone-2-DIV-2', function () {
//                 return view('pages/products/ecom-ex/Tab-Ex-01-Zone-2-DIV-2');
//             });



//             Route::get('smartphone', 'ProductListController@ecom_smartphone')->name('ecom-ex.smartphone');
//             Route::get('/smartphone/Smart-Ex-02-DZ1', function () {
//                 return view('pages/products/ecom-ex/Smart-Ex-02-DZ1');
//             });
//             Route::get('/smartphone/Smart-Ex-02-DZ2', function () {
//                 return view('pages/products/ecom-ex/Smart-Ex-02-DZ2');
//             });
//             Route::get('/smartphone/Smart-Ex-201', function () {
//                 return view('pages/products/ecom-ex/Smart-Ex-201');
//             });
//         });




//         // Gamber johnson index
//         Route::get('/gamber-johnson/Mounting-Product', function () {
//             return view('pages/products/gamber-johnson/index');
//         })->name('gamber-johnson.index');

//         // ikey index
//         Route::get('/ikey/rugged_keyboard', function () {
//             return view('pages/products/ikey/index');
//         })->name('ikey.index');

//         Route::get('/ikey/rugged_keyboard/medical/{name}', 'ProductDetailController@detail_template');
//         Route::get('/ikey/rugged_keyboard/fleet/{name}', 'ProductDetailController@detail_template');
//         Route::get('/ikey/rugged_keyboard/public-safety/{name}', 'ProductDetailController@detail_template');
//         Route::get('/ikey/rugged_keyboard/oil&gas/{name}', 'ProductDetailController@detail_template');
//         Route::get('/ikey/rugged_keyboard/military/{name}', 'ProductDetailController@detail_template');
//         Route::get('/ikey/rugged_keyboard/industrial/{name}', 'ProductDetailController@detail_template');

//         // sam4s
//         Route::get('/sam4s', function () {
//             return view('pages/products/sam4s/index');
//         })->name('sam4s.index');
//         Route::get('/sam4s/receipt-printers', 'ProductListController@sam4s_receiptprinter')
//         ->name('sam4s.receipt-printers');
//         Route::get('/sam4s/receipt-printers/SHMP-300', function () {
//             return view('pages/products/sam4s/SHMP-300');
//         });
//         Route::get('/sam4s/receipt-printers/SHMP-200', function () {
//             return view('pages/products/sam4s/SHMP-200');
//         });
//         Route::get('/sam4s/receipt-printers/GIANT-100', function () {
//             return view('pages/products/sam4s/GIANT-100');
//         });
//         Route::get('/sam4s/receipt-printers/GIANT-PRO', function () {
//             return view('pages/products/sam4s/GIANT-PRO');
//         });
//         Route::get('/sam4s/receipt-printers/ELLIX40II-42', function () {
//             return view('pages/products/sam4s/ELLIX40II-42');
//         });
//         Route::get('/sam4s/receipt-printers/ELLIX35III-45II', function () {
//             return view('pages/products/sam4s/ELLIX35III-45II');
//         });
//         Route::get('/sam4s/receipt-printers/ELLIX30III-32III', function () {
//             return view('pages/products/sam4s/ELLIX30III-32III');
//         });


//         Route::get('/sam4s/mobile-computers', 'ProductListController@sam4s_pda')
//         ->name('sam4s.mobile-computers');
//         Route::get('/sam4s/mobile-computers/SHR-1000', function () {
//             return view('pages/products/sam4s/SHR-1000');
//         });
//         Route::get('/sam4s/mobile-computers/SHM-200', function () {
//             return view('pages/products/sam4s/SHM-200');
//         });
//         Route::get('/sam4s/mobile-computers/SHM-1000-NFC', function () {
//             return view('pages/products/sam4s/SHM-1000-NFC');
//         });
//         Route::get('/sam4s/mobile-computers/SHM-1000', function () {
//             return view('pages/products/sam4s/SHM-1000');
//         });
//         Route::get('/sam4s/mobile-computers/STM-7000', function () {
//             return view('pages/products/sam4s/STM-7000');
//         });
//         Route::get('/sam4s/mobile-computers/SHR-200', function () {
//             return view('pages/products/sam4s/SHR-200');
//         });

//         // toshibatec index
//         Route::get('/toshiba-tec/label-printers', function () {
//             return view('pages/products/toshiba-tec/index');
//         })->name('toshiba-tec.index');
//         Route::get('/toshiba-tec/label-printers/B-SA4TP', function () {
//             return view('pages/products/toshiba-tec/B-SA4TP');
//         })->name('toshiba-tec.B-SA4TP');
//         Route::get('/toshiba-tec/label-printers/B-SA4TM', function () {
//             return view('pages/products/toshiba-tec/B-SA4TM');
//         })->name('toshiba-tec.B-SA4TM');


//         // WeGuard
//         Route::get('/WeGuard/Mobile-Device-Management', function () {
//             return view('pages/products/WeGuard/mobile-device-management');
//         })->name('WeGuard.index');
//         Route::get('/WeGuard/Mobile-Device-Management/buy', function () {
//             return view('pages/products/WeGuard/buy');
//         })->name('WeGuard.buy');
//         Route::get('/WeGuard/Mobile-Device-Management/trial', function () {
//             return view('pages/products/WeGuard/trial');
//         })->name('WeGuard.trial');



//         // Product List Ikey Rugged Keyboard
//         Route::get('/ikey/rugged_keyboard/medical', 'ProductListController@ikey_medical');
//         Route::get('/ikey/rugged_keyboard/fleet', 'ProductListController@ikey_fleet');
//         Route::get('/ikey/rugged_keyboard/public-safety', 'ProductListController@ikey_public_safety');
//         Route::get('/ikey/rugged_keyboard/oil&gas', 'ProductListController@ikey_oil_gas');
//         Route::get('/ikey/rugged_keyboard/military', 'ProductListController@ikey_military');
//         Route::get('/ikey/rugged_keyboard/industrial', 'ProductListController@ikey_industrial');


//     });

// });

// Route::get('admin/manage-product', function () {
//     return view('page-admin/manage-product');
// });

// // Manage Product
// Route::resource('admin/login', 'LoginController');


// Route::group([
//     'prefix' => 'admin'
// ], function(){

//     Route::group([
//         'prefix' => 'manage'
//     ], function(){

//         Route::get('/', 'Admin\ManageController@index');
//         Route::get('insert-brand', 'Admin\ManageController@insertbrand');
//         Route::post('insert-brand', 'Admin\ManageController@insertbrand');
//         Route::get('insert-product-line', 'Admin\ManageController@insert_product_line');
//         Route::post('insert-product-line', 'Admin\ManageController@insert_product_line');
//         Route::get('insert-product-type', 'Admin\ManageController@insert_product_type');
//         Route::post('insert-product-type', 'Admin\ManageController@insert_product_type');
//         Route::get('insert-product', 'Admin\ManageController@insert_product');
//         Route::post('insert-product', 'Admin\ManageController@insert_product');
//         Route::post('ajaxRequestPost', 'Admin\ManageController@ajaxRequestPost');
//         // Route::get('insert-product-line', 'Admin\ManageController@insert_product_line');
//     });

//     Route::group([
//         'prefix' => 'product'
//     ], function(){

//         Route::get('/', 'Admin\ManageController@index');
//         Route::resource('/insert-product-detail', 'Admin\ProductController');
//         Route::post('/insert-product-detail/img_read', 'Admin\ProductController@img_read');
//         Route::post('/insert-product-detail/upload_img', 'Admin\ProductController@upload_img');
//         //Route::get('/insert-product-detail/{id}', 'Admin\ProductController@insert_product');
//         //Route::post('/insert-product-detail', 'Admin\ManageController@insert_product_line');

//     });



//     Route::group([
//         'prefix' => 'news'
//     ], function(){

//         Route::get('/', 'Admin\NewsController@index');
//         Route::post('insert-product-line', 'Admin\ManageController@insert_product_line');
//         Route::get('insert-product-type', 'Admin\ManageController@insert_product_type');
//         Route::post('insert-product-type', 'Admin\ManageController@insert_product_type');
//         Route::get('insert-product', 'Admin\ManageController@insert_product');
//         Route::post('insert-product', 'Admin\ManageController@insert_product');
//         Route::post('ajaxRequestPost', 'Admin\ManageController@ajaxRequestPost');

//     });



// });


// Route::get('admin/test', function () {
//     return view('page-admin/insert-news');
// });


// //knox
// Route::get('products/samsung/Samsung-Knox', function () {
//     return view('pages/products/samsung/Samsung-Knox');
// })->name('Samsung.Knox');


// Route::get('/product/non-samsung/sam4s/mobile-printer', function () {
//     return redirect('/products/non-samsung/sam4s/mobile-computers');
// });

// Route::get('/test-script', function () {
//     return view('pages/test-script');
// });


// Route::get('/products/non-samsung/xciel', function () {
//     return view('pages/products/xciel/xciel');
// })->name('xciel.index');


// Route::get('/test-nav', function () {

//     // return Cookie::get('_token');
//     return view('pages/test-nav');
// });
