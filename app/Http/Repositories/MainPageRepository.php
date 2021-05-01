<?php


namespace App\Http\Repositories;


use App\Http\Repositories\Contracts\MainPageRepositoryInterface;
use App\Models\Profile;
use App\Models\Skills;
use App\Models\Tech;
use App\Models\Work;

class MainPageRepository implements MainPageRepositoryInterface
{

    private $dataForFirstPage = [];

    public function getDataForFirstPage() :array
    {
        $this->getWork();
        $this->getSkills();
        $this->getProfile();
        $this->getTech();
        return $this->dataForFirstPage;
    }

    private function getWork() :void
    {
        $this->dataForFirstPage['work'] = Work::all();

    }

    private function getSkills() :void
    {
        $this->dataForFirstPage['skills'] = Skills::all();

    }

    private function getProfile() :void
    {
        $this->dataForFirstPage['profile'] = Profile::where('slug', env('SLUG_PROFILE'))->first();

    }

    public function getProfileForTelegram()
    {
        return Profile::where('slug', env('SLUG_PROFILE'))->first();

    }

    public function getTech()
    {
        $this->dataForFirstPage['tech'] = Tech::all();

    }

}
