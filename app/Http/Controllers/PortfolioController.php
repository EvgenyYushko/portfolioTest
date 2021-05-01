<?php


namespace App\Http\Controllers;


use App\Http\Repositories\Contracts\MainPageRepositoryInterface;
use App\Models\Record;
use App\Notifications\TelegramNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TelegramNotifications\Messages\TelegramMessage;

class PortfolioController extends Controller
{
    public $mainPageRepository;

    public function __construct(MainPageRepositoryInterface $mainPageRepository)
    {
        $this->mainPageRepository = $mainPageRepository;
    }

    public function index() :View
    {
        $data = $this->mainPageRepository->getDataForFirstPage();
        return view('sections.main')->with(compact('data'));
    }


    public function sendMessage(Request $request)
    {
        $profile = $this->mainPageRepository->getProfileForTelegram();
        Record::create(['text' => $request->text]); // сюда текст приходит с инпута, но дальше вроде не идёт
        $profile->notify(new TelegramNotification($request->text));
        return redirect()->back();
    }
}
