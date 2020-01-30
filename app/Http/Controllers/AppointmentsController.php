<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAppointmentsRequest;
use App\Http\Requests\UpdateAppointmentsRequest;
use App\Repositories\AppointmentsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AppointmentsController extends AppBaseController
{
    /** @var  AppointmentsRepository */
    private $appointmentsRepository;

    public function __construct(AppointmentsRepository $appointmentsRepo)
    {
        $this->appointmentsRepository = $appointmentsRepo;
    }

    /**
     * Display a listing of the Appointments.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $appointments = $this->appointmentsRepository->all();

        return view('appointments.index')
            ->with('appointments', $appointments);
    }

    /**
     * Show the form for creating a new Appointments.
     *
     * @return Response
     */
    public function create()
    {
        return view('appointments.create');
    }

    /**
     * Store a newly created Appointments in storage.
     *
     * @param CreateAppointmentsRequest $request
     *
     * @return Response
     */
    public function store(CreateAppointmentsRequest $request)
    {
        $input = $request->all();

        $appointments = $this->appointmentsRepository->create($input);

        Flash::success('Appointments saved successfully.');

        return redirect(route('appointments.index'));
    }

    /**
     * Display the specified Appointments.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $appointments = $this->appointmentsRepository->find($id);

        if (empty($appointments)) {
            Flash::error('Appointments not found');

            return redirect(route('appointments.index'));
        }

        return view('appointments.show')->with('appointments', $appointments);
    }

    /**
     * Show the form for editing the specified Appointments.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $appointments = $this->appointmentsRepository->find($id);

        if (empty($appointments)) {
            Flash::error('Appointments not found');

            return redirect(route('appointments.index'));
        }

        return view('appointments.edit')->with('appointments', $appointments);
    }

    /**
     * Update the specified Appointments in storage.
     *
     * @param int $id
     * @param UpdateAppointmentsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAppointmentsRequest $request)
    {
        $appointments = $this->appointmentsRepository->find($id);

        if (empty($appointments)) {
            Flash::error('Appointments not found');

            return redirect(route('appointments.index'));
        }

        $appointments = $this->appointmentsRepository->update($request->all(), $id);

        Flash::success('Appointments updated successfully.');

        return redirect(route('appointments.index'));
    }

    /**
     * Remove the specified Appointments from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $appointments = $this->appointmentsRepository->find($id);

        if (empty($appointments)) {
            Flash::error('Appointments not found');

            return redirect(route('appointments.index'));
        }

        $this->appointmentsRepository->delete($id);

        Flash::success('Appointments deleted successfully.');

        return redirect(route('appointments.index'));
    }
}
