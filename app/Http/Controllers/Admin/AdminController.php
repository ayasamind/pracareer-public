<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Repositories\AdminRepository;
use App\Repositories\Interfaces\AdminRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Flash;
use Response;

class AdminController extends Controller
{
    private AdminRepositoryInterface $adminRepository;

    public function __construct(AdminRepositoryInterface $adminRepo = null)
    {
        $this->adminRepository = $adminRepo ?? new AdminRepository();
    }

    /**
     * 管理者一覧
     */
    public function index(Request $request): View
    {
        $admins = $this->adminRepository->paginate(10);

        return view('admin.admins.index')->with('admins', $admins);
    }

    /**
     * Show the form for creating a new Admin.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.admins.create');
    }

    /**
     * Store a newly created Admin in storage.
     *
     * @param CreateAdminRequest $request
     *
     * @return Response
     */
    public function store(CreateAdminRequest $request)
    {
        $input = $request->validated();

        $admin = $this->adminRepository->createAdmin($input);

        Flash::success(__('messages.saved', ['model' => __('models/admins.singular')]));

        return redirect(route('admin.admins.index'));
    }

    /**
     * Display the specified Admin.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $admin = $this->adminRepository->find($id);

        if (empty($admin)) {
            Flash::error(__('messages.not_found', ['model' => __('models/admins.singular')]));

            return redirect(route('admin.admins.index'));
        }

        return view('admin.admins.show')->with('admin', $admin);
    }

    /**
     * Show the form for editing the specified Admin.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $admin = $this->adminRepository->find($id);

        if (empty($admin)) {
            Flash::error(__('messages.not_found', ['model' => __('models/admins.singular')]));

            return redirect(route('admin.admins.index'));
        }

        return view('admin.admins.edit')->with('admin', $admin);
    }

    /**
     * Update the specified Admin in storage.
     *
     * @param int $id
     * @param UpdateAdminRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdminRequest $request)
    {
        $admin = $this->adminRepository->find($id);

        if (empty($admin)) {
            Flash::error(__('messages.not_found', ['model' => __('models/admins.singular')]));

            return redirect(route('admin.admins.index'));
        }

        $admin = $this->adminRepository->update($request->validated(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/admins.singular')]));

        return redirect(route('admin.admins.index'));
    }

    /**
     * Remove the specified Admin from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $admin = $this->adminRepository->find($id);

        if (empty($admin)) {
            Flash::error(__('messages.not_found', ['model' => __('models/admins.singular')]));

            return redirect(route('admin.admins.index'));
        }

        $this->adminRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/admins.singular')]));

        return redirect(route('admin.admins.index'));
    }
}
