<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrganizationUserRequest;
use App\Http\Requests\UpdateOrganizationUserRequest;
use App\Repositories\OrganizationUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class OrganizationUserController extends AppBaseController
{
    /** @var  OrganizationUserRepository */
    private $organizationUserRepository;

    public function __construct(OrganizationUserRepository $organizationUserRepo)
    {
        $this->organizationUserRepository = $organizationUserRepo;
    }

    /**
     * Display a listing of the OrganizationUser.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $organizationUsers = $this->organizationUserRepository->all();

        return view('organization_users.index')
            ->with('organizationUsers', $organizationUsers);
    }

    /**
     * Show the form for creating a new OrganizationUser.
     *
     * @return Response
     */
    public function create()
    {
        return view('organization_users.create');
    }

    /**
     * Store a newly created OrganizationUser in storage.
     *
     * @param CreateOrganizationUserRequest $request
     *
     * @return Response
     */
    public function store(CreateOrganizationUserRequest $request)
    {
        $input = $request->all();

        $organizationUser = $this->organizationUserRepository->create($input);

        Flash::success('Organization User saved successfully.');

        return redirect(route('organizationUsers.index'));
    }

    /**
     * Display the specified OrganizationUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $organizationUser = $this->organizationUserRepository->find($id);

        if (empty($organizationUser)) {
            Flash::error('Organization User not found');

            return redirect(route('organizationUsers.index'));
        }

        return view('organization_users.show')->with('organizationUser', $organizationUser);
    }

    /**
     * Show the form for editing the specified OrganizationUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $organizationUser = $this->organizationUserRepository->find($id);

        if (empty($organizationUser)) {
            Flash::error('Organization User not found');

            return redirect(route('organizationUsers.index'));
        }

        return view('organization_users.edit')->with('organizationUser', $organizationUser);
    }

    /**
     * Update the specified OrganizationUser in storage.
     *
     * @param int $id
     * @param UpdateOrganizationUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrganizationUserRequest $request)
    {
        $organizationUser = $this->organizationUserRepository->find($id);

        if (empty($organizationUser)) {
            Flash::error('Organization User not found');

            return redirect(route('organizationUsers.index'));
        }

        $organizationUser = $this->organizationUserRepository->update($request->all(), $id);

        Flash::success('Organization User updated successfully.');

        return redirect(route('organizationUsers.index'));
    }

    /**
     * Remove the specified OrganizationUser from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $organizationUser = $this->organizationUserRepository->find($id);

        if (empty($organizationUser)) {
            Flash::error('Organization User not found');

            return redirect(route('organizationUsers.index'));
        }

        $this->organizationUserRepository->delete($id);

        Flash::success('Organization User deleted successfully.');

        return redirect(route('organizationUsers.index'));
    }
}
