<?php

namespace App\Filament\Resources\BarcodeResource\Pages;

use App\Filament\Resources\BarcodeResource;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Resources\Pages\Page;
use App\Models\Barcode;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CreateQr extends Page
{
  protected static string $resource = BarcodeResource::class;
  protected static string $view = 'filament.resources.barcode-resource.pages.create-qr';

  public $table_number;

  public function mount(): void
  {
    $this->form->fill();
    $this->table_number = chr(rand(65, 90)) . rand(1000, 9999);
  }
}
