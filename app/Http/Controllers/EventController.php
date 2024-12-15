<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Menampilkan semua data event.
     */
    public function index()
    {
        $events = Event::all(); // Mengambil semua data event dari database
        return view('event.index', compact('events')); // Mengirim data ke view
    }

    /**
     * Menampilkan form tambah event.
     */
    public function create()
    {
        return view('event.create'); // Mengembalikan view form create
    }

    /**
     * Menyimpan data event baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama_event' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        // Menyimpan data event ke database
        Event::create([
            'nama_event' => $request->nama_event,
            'deskripsi' => $request->deskripsi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
        ]);

        // Redirect ke halaman event index dengan pesan sukses
        return redirect()->route('event.index')->with('success', 'Event berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail data event tertentu.
     */
    public function show(Event $event)
    {
        return view('event.show', compact('event')); // Mengembalikan view dengan data event
    }

    /**
     * Menampilkan form edit data event.
     */
    public function edit(Event $event)
    {
        return view('event.edit', compact('event')); // Mengembalikan form edit dengan data event
    }

    /**
     * Menyimpan perubahan data event ke database.
     */
    public function update(Request $request, Event $event)
    {
        // Validasi data input
        $request->validate([
            'nama_event' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        // Update data event
        $event->update([
            'nama_event' => $request->nama_event,
            'deskripsi' => $request->deskripsi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
        ]);

        // Redirect ke halaman event index dengan pesan sukses
        return redirect()->route('event.index')->with('success', 'Event berhasil diperbarui!');
    }

    /**
     * Menghapus data event dari database.
     */
    public function destroy(Event $event)
    {
        $event->delete(); // Menghapus data event
        return redirect()->route('event.index')->with('success', 'Event berhasil dihapus!');
    }
}
